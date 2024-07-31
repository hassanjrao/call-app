<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWelcome;
use App\Models\{Customer, PaymentMethod, Plan, Role, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Log, Mail, Session};
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;


class PaymentController extends Controller
{
    public function showPaymentForm($planId)
    {
        $plan = Plan::findOrFail($planId);

        $user=User::create([
            'first_name' => 'N\A',
            'last_name' => 'N\A',
            'email'=>rand(10,1000).time().'@gmail.com',
            'password' => Hash::make('password'),
            'is_temp' => true,
            'role_id'=>2
        ]);

        $intent= $user->createSetupIntent([
            'metadata' => [
                'plan_id' => $plan->id,
                'website' => config('app.url'),
                'user_id' => $user->id,
            ],
        ]);


        return view('pay_new', compact('plan', 'intent','user'));
    }


    public function processPayment(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $names = explode(' ', $data['name'], 2);
        $firstName = $names[0]  ? $names[0] : 'N\A';
        $lastName = isset($names[1]) ? $names[1] : 'N\A';
        $phone = isset($data['phone']) ? $data['phone'] : 'N\A';
        $UserIP = $request->ip();

        $country = "France"; // Default to France if no location data is found
        $position = Location::get($UserIP);

        if (is_object($position) && isset($position->countryName)) {
            $country = $position->countryName;
        } else {
            // Log error or handle the case where position is not as expected
            \Log::error("Failed to retrieve location data for IP: $UserIP");
        }

        $paymentMethod = PaymentMethod::where('methodType', 'paypal')->first();
        $password = Str::random(10);

        $user = User::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $data['email'],
            'password' => $password,
            'role_id' => Role::where('roleName', 'customer')->first()->id,
        ]);

        $user->password = Hash::make($password);

        Customer::create([
            'user_id' => $user->id,
            'country' => $country,
            'number' => $phone,
            'plan_id' => $data['plan_id'],
            'payment_method_id' => $paymentMethod->id,
        ]);

        Mail::to($user->email)->send(new NewUserWelcome($user, $password));

        $emailData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $phone,
            'additionalData' => $data,
            'price' => $data['price'],
            'planName' => $data['planName'],
        ];

        $sub = "Pack " . $data['planName'];
        $emails = ['brahimalouanii441@gmail.com', 'hamzabrahim0852@gmail.com'];
        Mail::send('emails.orderConfirmation', $emailData, function ($message) use ($emails, $sub) {
            $message->to($emails)->subject($sub);
        });

        return redirect()->route('thankYou');
    }


    public function stripePost(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $plan->price * 100, // Convert to cents
            'currency' => 'eur',
            'payment_method_types' => ['card', 'link'],
        ]);

        // Store plan and payment data in session for use after payment confirmation
        $request->session()->put('paymentData', [
            'plan_id' => $plan->id,

        ]);

        return [
            'clientSecret' => $paymentIntent->client_secret,
        ];
    }



    public function handleStripePayment(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $paymentIntentId = $request->payment_intent;

        try {
            $paymentIntent = $stripe->paymentIntents->retrieve($paymentIntentId);

            if ($paymentIntent->status == 'succeeded') {



                return redirect()->route('thankYou');
            } else {
                // Handle failed payment
                return redirect()->route('paymentFailed'); // Ensure you have a route and view for handling failures
            }
        } catch (\Exception $e) {
            // Handle error
            return redirect()->route('paymentError')->with('error', $e->getMessage()); // Ensure you have a route and view for handling errors
        }
    }


    public function thankYou(Request $request)
    {
        $user=User::find($request->user_id);

        if(!$user){
            $user=User::find(session('user_id'));
        }

        $userPassword = session('user_password');

        $plan = Plan::find($request->plan_id);

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
            $emails = ['hassanjrao@gmail.com', 'brahimalouanii441@gmail.com'];
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

        // Retrieve user details from session and display them
        return view('success');
    }
}
