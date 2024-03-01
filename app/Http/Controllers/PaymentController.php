<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\PaymentMethod;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Srmklive\PayPal\Services\ExpressCheckout;


class PaymentController extends Controller

{

    
    public function showPaymentForm($planId)
    {
        $plan = Plan::findOrFail($planId);
        return view('pay', compact('plan'));
    }

    public function payment(Request $request)
    {


        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'plan_id' => 'required|exists:plans,id',
        ]);

        $request->session()->put('userData', $validated);
        $plan = Plan::findOrFail($validated['plan_id']);


        $data = [];
        $data['items'] = [
            [
                'name' => $plan->name,
                'price' => $plan->price,
                'desc' => 'Subscription for ' . $plan->name,
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $plan->price;

        $provider = new ExpressCheckout;

        $response = $provider->setExpressCheckout($data);

        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }

    public function cancel()
    {
        dd('Your payment is canceled.');
    }

//    public function success(Request $request)
//    {
//        $provider = new ExpressCheckout;
//        $response = $provider->getExpressCheckoutDetails($request->token);
//
//        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
//            dd('Your payment was successfully.');
//        }
//
//        dd('Please try again later.');
//    }


    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // Assuming session data was set before redirecting to PayPal
            $userData = $request->session()->get('userData');
            $planId = $request->session()->get('planId');

            // Generate a random password
            $password = Str::random(10);

            // Find or create the role for customer
            $role = Role::where('roleName', 'customer')->first();

            // Find or create the payment method for PayPal
            $paymentMethod = PaymentMethod::where('methodType', 'paypal')->first();

            // Begin transaction
            DB::beginTransaction();
            try {
                // Create the user
                $user = User::create([
                    'first_name' => $userData['first_name'],
                    'last_name' => $userData['last_name'],
                    'email' => $userData['email'],
                    'password' => Hash::make($password),
                    'role_id' => $role->id,
                ]);

                // Create the customer
                $customer = Customer::create([
                    'user_id' => $user->id,
                    'country' => "Morocco", // Assume country is obtained and stored in session
                    'number' => $userData['phone'],
                    'plan_id' =>$userData['plan_id'],
                    'payment_method_id' => $paymentMethod->id,
                ]);

                DB::commit();

                // Clear session data
                $request->session()->forget(['userData', 'planId']);

                // Return success view with login credentials
                return view('success', compact('user', 'password'));

            } catch (\Exception $e) {
                DB::rollback();
                // Handle error
                dd('Payment was successful, but there was an error creating the user account.');
            }

        } else {
            // Payment was not successful
            dd('Please try again later.');
        }
    }
    
}
