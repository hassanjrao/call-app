<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\NewUserWelcome;
use App\Models\{Customer, PaymentMethod, Plan, Role, User};
use Illuminate\Support\Facades\{DB, Hash, Mail, Session};
use Illuminate\Support\Str;
use Laravel\Cashier\Exceptions\IncompletePayment;
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

            
            $userPassword = session('user_password');


            try {

                $subscription = $user->newSubscription(
                    $plan->id,
                    $plan->stripe_id,
                )
                    ->create($request->token, [
                        'email' => $user->email,
                        'name' => $user->first_name . ' ' . $user->last_name,
                    ]);
            } catch (IncompletePayment $exception) {
                return redirect()->route(
                    'cashier.payment',
                    [$exception->payment->id, 'redirect' => route('thankYou',['user_id' => $user->id,'plan_id' => $plan->id])]
                );
            }





            return redirect()->route('thankYou', ['user_id' => $user->id, 'plan_id' => $plan->id]);
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
