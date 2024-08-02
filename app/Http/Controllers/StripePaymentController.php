<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Exceptions\IncompletePayment;
use Stevebauman\Location\Facades\Location;

class StripePaymentController extends Controller
{

    public function subscribe(Request $request)
    {

        Log::info('StripePaymentController@subscribe', ['request' => $request->all()]);


        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $user = User::find($request->user_id);

            $user->update([
                'email' => $request->email,
            ]);
        }

        $fullNameArr = explode(' ', $request->name);
        $firstName = $fullNameArr[0];
        $lastName = isset($fullNameArr[1]) ? $fullNameArr[1] : $firstName;

        $password = \Str::random(10);

        session(['user_password' => $password]);


        $user->update([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'is_temp' => 0,
            'password' => \Hash::make($password),
        ]);


        $plan = Plan::find($request->plan_id);

        session(['user_id' => $user->id]);
        session(['plan_id' => $plan->id]);



        $UserIP = $request->ip();

        $country = "France"; // Default to France if no location data is found
        $position = Location::get($UserIP);

        if (is_object($position) && isset($position->countryName)) {
            $country = $position->countryName;
        } else {
            // Log error or handle the case where position is not as expected
            Log::error("Failed to retrieve location data for IP: $UserIP");
        }


        Customer::updateOrCreate([
            'user_id' => $user->id,
        ], [
            'user_id' => $user->id,
            'country' => $country,
            'number' => $request->phone,
            'plan_id' => $request->plan_id,
            'payment_method_id' =1,
        ]);





        try {

            $user->newSubscription('cashier', $plan->stripe_id)->create($request->paymentMethod, [
                'email' => $user->email,
                'name' => $user->first_name . ' ' . $user->last_name,
            ]);
        } catch (IncompletePayment $exception) {
            return redirect()->route(
                'cashier.payment',
                [$exception->payment->id]
            );
        }


        return redirect()->route('thankYou', ['user_id' => $user->id, 'plan_id' => $plan->id]);
    }
}
