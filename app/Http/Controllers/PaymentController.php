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

use Session;
use Stripe;
use Stripe\Charge;
use Stripe\Stripe as StripeStripe;


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

        if ($request->payment_method == 'paypal') {
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
        elseif ($request->payment_method == 'stripe') {
            // Process Stripe payment
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



            try {

                $session = \Stripe\Checkout\Session::create([
                    'line_items'  => [
                        [
                            'price_data' => [
                                'currency'     => 'eur',
                                'product_data' => [
                                    'name' => 'Payment for ' . $plan->name,
                                ],
                                'unit_amount'  => $plan->price * 100,
                            ],
                            'quantity'   => 1,
                        ],
                    ],
                    'mode'        => 'payment',
                    'success_url' => route('success.stripe'),
                    'cancel_url'  => route('payment.cancel'),
                ]);

                return redirect()->away($session->url);
            } catch (\Exception $e) {
                // Handle error
                return back()->withErrors(['message' => 'Error: ' . $e->getMessage()]);
            }
        }




    }





    public function cancel()
    {
        dd('Your payment is canceled.');
    }



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
    public function successStripe(Request $request)
    {

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


    }








}
