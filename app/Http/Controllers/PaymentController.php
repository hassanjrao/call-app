<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWelcome;
use App\Models\{Customer, PaymentMethod, Plan, Role, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Mail, Session};
use Illuminate\Support\Str;


class PaymentController extends Controller
{
    public function showPaymentForm($planId)
    {
        $plan = Plan::findOrFail($planId);
        return view('pay', compact('plan'));
    }


    public function processPayment(Request $request)

    {


            $data = json_decode($request->getContent(), true);
            $paymentMethod = PaymentMethod::where('methodType', 'paypal')->first();
            $password = Str::random(10);
            // Assuming you receive user details and plan id in the request
            $user = User::create([
                'first_name' => $data['first_name'], // You need to ensure these are passed correctly
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => $password, // Consider generating a random password or asking the user to set it
                'role_id' => Role::where('roleName', 'customer')->first()->id,
            ]);

            // Generate or define the password here
            $user->password = Hash::make($password);

// Send welcome email with password


            // Optionally create a customer record
            Customer::create([
                'user_id' => $user->id,
                'country' => "Morocco", // Assume country is obtained and stored in session
                'number' => $data['phone'],
                'plan_id' =>$data['plan_id'],
                'payment_method_id' => $paymentMethod->id,
                // Add other necessary fields
            ]);
            Mail::to($user->email)->send(new NewUserWelcome($user, $password));
            // Implement the logic to handle payment confirmation and storing payment details

            // After successful payment, redirect to the thank-you page with user details

        // This method should be called by the PayPal SDK's onApprove function
        return redirect()->route('thankYou');
        // Consider how you want to handle password visibility/security
    }


    public function stripePost(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId); // Make sure you pass the plan ID to this method

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $plan->price * 100, // Convert to cents
            'currency' => 'eur',
            'payment_method_types' => ['card','link'],
        ]);

        // Store plan and payment data in session for use after payment confirmation
        $request->session()->put('paymentData', [
            'plan_id' => $plan->id,
            // Any other data you need
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
                // Assuming session contains plan_id and any other necessary info

                // Redirect to thank you page
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


    public function thankYou()
    {
        // Retrieve user details from session and display them
        return view('success');
    }

}
