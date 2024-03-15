<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class PhoneNumberController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $phoneNumbers = PhoneNumber::all();
        return view('dashboard.customers.phone',compact('phoneNumbers'));
    }

    public function create()
    {


        return view('dashboard.customers.create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'countryCode' => 'required|string|max:2',
            'selectedNumber' => 'required|string',
        ]);

        $sid = env("TWILIO_ACCOUNT_SID");
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        try {
            // Purchase the selected phone number
            $purchasedNumber = $twilio->incomingPhoneNumbers->create([
                'phoneNumber' => $validated['selectedNumber'],
                // Optionally, add any other parameters you need, such as VoiceUrl for handling calls
            ]);

            // Assume you have a relation set up to associate phone numbers with a user
            $user = Auth::user(); // Get the authenticated user
            $customer = $user->customer;

            // Create a new PhoneNumber model instance and associate it with the user
            $phoneNumber = new PhoneNumber([
                'customer_id' => $customer->id,
                'number' => $purchasedNumber->phoneNumber,

            ]);
            $phoneNumber->save();

            return redirect()->route('phone.index')->with('success', 'Phone number purchased successfully.');

        } catch (TwilioException $e) {
            dd($e);
            return back()->withErrors(['error' => 'Failed to purchase number: ' . $e->getMessage()]);
        }
    }

    // Fetch available phone numbers from Twilio based on country code
    public function fetchAvailableNumbers(Request $request)
    {
        $countryCode = $request->countryCode; // Assuming 'countryCode' is passed as a request parameter

        // Initialize the Twilio client with credentials from your .env file
        $sid = env("TWILIO_ACCOUNT_SID");
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        try {
            // Fetch available phone numbers for the specified country
            $availablePhoneNumbers = $twilio->availablePhoneNumbers($countryCode)
                ->local
                ->read([], 20); // Fetch 20 available numbers

            // You may want to filter or transform the results based on your needs
            $numbers = [];
            foreach ($availablePhoneNumbers as $number) {
                $numbers[] = [
                    'friendlyName' => $number->friendlyName,
                    'phoneNumber' => $number->phoneNumber,
                ];
            }

            return response()->json([
                'success' => true,
                'numbers' => $numbers,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }



    public function send()
    {
        $phoneNumbers = PhoneNumber::all();
        return view('sms',compact('phoneNumbers'));
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'recipient' => 'required|string',
            'message' => 'required|string',
            'phoneNumberId' => 'required|integer',
        ]);

        $userPhoneNumber = PhoneNumber::findOrFail($validated['phoneNumberId']);

        // Check if the phone number belongs to the authenticated user to prevent misuse
        if ($userPhoneNumber->customer->user_id !== Auth::id()) {
            return back()->withErrors(['error' => 'Unauthorized to send message from this number.']);
        }

        $sid = env("TWILIO_ACCOUNT_SID");
        $token = env("TWILIO_AUTH_TOKEN");
        $twilioNumber = $userPhoneNumber->number; // Your Twilio phone number
        $recipient = $validated['recipient'];
        $messageBody = $validated['message'];

        $twilio = new Client($sid, $token);

        try {
            $message = $twilio->messages->create($recipient, [
                'from' => $twilioNumber,
                'body' => $messageBody,
            ]);

            return back()->with('success', 'Message sent successfully.');
        } catch (TwilioException $e) {
            return back()->withErrors(['error' => 'Failed to send message: ' . $e->getMessage()]);
        }
    }


    // Display the specified resource
    public function show()
    {
        // Show a specific phone number details if needed
        $phoneNumbers = PhoneNumber::all();
        return view('sms',compact('phoneNumbers'));
    }




    // Show the form for editing the specified resource
    public function edit(PhoneNumber $phoneNumber)
    {
        // Return view to edit a specific phone number if needed
    }

    // Update the specified resource in storage
    public function update(Request $request, PhoneNumber $phoneNumber)
    {
        // Update a specific phone number details if needed
    }

    // Remove the specified resource from storage
    public function destroy(PhoneNumber $phoneNumber)
    {
        $phoneNumber->delete();
        return redirect()->route('phone.index')->with('success', 'Phone number deleted successfully.');
    }
}
