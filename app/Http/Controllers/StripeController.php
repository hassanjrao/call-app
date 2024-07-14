<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\NewUserWelcome;
use App\Models\{Customer, PaymentMethod, Plan, Role, User};
use Illuminate\Support\Facades\{DB, Hash, Mail, Session};
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;
use Stripe\SetupIntent;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function createUser(Request $request)
    {
        Log::info("StripeController@createUser: ", [
            'request' => $request->all(),
        ]);
        try {
            $request->validate([
                'email' => 'required',
                'plan_id' => 'required|exists:plans,id',
            ]);

            $names = explode(' ', $request->name, 2);
            $firstName = $names[0]  ? $names[0] : 'N\A';
            $lastName = isset($names[1]) ? $names[1] : 'N\A';
            $phone = $request->phone ? $request->phone : 'N\A';


            $UserIP = $request->ip();

            $country = "France"; // Default to France if no location data is found
            $position = Location::get($UserIP);

            if (is_object($position) && isset($position->countryName)) {
                $country = $position->countryName;
            } else {
                // Log error or handle the case where position is not as expected
                Log::error("Failed to retrieve location data for IP: $UserIP");
            }

            $paymentMethod = PaymentMethod::where('methodType', 'stripe')->first();
            $password = Str::random(10);

            $user = User::updateOrCreate([
                'email' => $request->email,
            ], [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $request->email,
                'password' => $password,
                'role_id' => Role::where('roleName', 'customer')->first()->id,
            ]);

            $user->password = Hash::make($password);

            Customer::updateOrCreate([
                'user_id' => $user->id,
            ], [
                'user_id' => $user->id,
                'country' => $country,
                'number' => $phone,
                'plan_id' => $request->plan_id,
                'payment_method_id' => $paymentMethod->id,
            ]);



            //save user email and password in session

            session(['user_email' => $request->email]);
            session(['user_password' => $password]);

            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create a setup intent with metadata
            $setupIntent = SetupIntent::create([
                'metadata' => [
                    'website' => config('app.url'),
                    'user_id' => $user->id,
                ],
            ]);


            return response()->json([
                'user' => $user,
                'intent' => $setupIntent,
            ]);
        } catch (\Exception $e) {
            Log::error("StripeController@createUser: ", [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'stack' => $e->getTraceAsString(),
            ]);
            return response()->json([
                'error' => 'Something went wrong, please try again later',
            ]);
        }
    }

    public function subscription(Request $request)
    {

        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'token' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        try {

            $user = User::findorfail($request->user_id);

            $plan = Plan::findorfail($request->plan_id);

            $subscription = $user->newSubscription(
                $plan->id,
                $plan->stripe_id,
            )
                ->create($request->token);


            $user->save();

            $userPassword = session('user_password');

            Mail::to($user->email)->send(new NewUserWelcome($user, $userPassword));


            try {
                $emailData = [
                    'name' => $user->first_name . ' ' . $user->last_name,
                    'email' => $user->email,
                    'phone' => $user->customer ? $user->customer->number : 'N\A',
                    'additionalData' => [],
                    'price' => $plan->price,
                    'planName' => $plan->name,
                ];

                $sub = "Pack " . $plan->name;
                // $emails = ['brahimalouanii441@gmail.com', 'hamzabrahim0852@gmail.com'];
                $emails=['hassanjrao@gmail.com'];
                Mail::send('emails.orderConfirmation', $emailData, function ($message) use ($emails, $sub) {
                    $message->to($emails)->subject($sub);
                });
            } catch (\Exception $e) {
                Log::error('StripeController@subscribeSuccess: ', [
                    'message' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                    'stack' => $e->getTraceAsString(),
                ]);
            }


            return redirect()->route('thankYou');
        } catch (\Exception $e) {
            Log::error("StripeController@subscription: ", [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'stack' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
    }

    public function thankyou()
    {
        return view('front.pricing-plans.thankyou');
    }
}
