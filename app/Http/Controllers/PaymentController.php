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

        if ($request->input('payment_method') === 'stripe') {
            Stripe::setApiKey(env("STRIPE_SECRET"));

            try {
                $paymentIntent = PaymentIntent::create([
                    'amount' => $request->input('amount'), // The amount in cents
                    'currency' => 'eur',
                    'description' => 'Your Product Description or Invoice Description',
                    'payment_method' => $request->input('stripeToken'),
                    'confirm' => true, // Confirm the payment at the same time
                ]);

                // Payment was successful
                // Process user registration and order details here as you did for PayPal
                // Make sure to check the paymentIntent status if needed

            } catch (ApiErrorException $e) {
                // Handle error
                // Log the error and return an appropriate response to the user
                return response()->json(['error' => $e->getMessage()], 400);
            }
        }else{
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

        }

        // This method should be called by the PayPal SDK's onApprove function
        return redirect()->route('thankYou');
 // Consider how you want to handle password visibility/security
    }

    public function thankYou()
    {
        // Retrieve user details from session and display them
        return view('success');
    }

}
