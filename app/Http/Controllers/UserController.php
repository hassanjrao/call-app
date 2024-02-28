<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a listing of the users.
    public function index()
    {
        $users = User::with(['role', 'customer.paymentMethod', 'customer.plan'])->get();
        return view('dashboard.users.index', compact('users'));
    }

    // Show the form for creating a new user.
    public function create()
    {
        $roles = Role::all();
        $paymentMethods = PaymentMethod::all();
        $plans = Plan::all();
        
        return view('dashboard.users.create', compact('roles', 'paymentMethods', 'plans'));
    }

    // Store a newly created user in storage.
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'number' => 'required|string|max:255',
        'role_id' => 'required|integer|exists:roles,id',
        'payment_method_id' => 'nullable|integer|exists:payment_methods,id',
        'plan_id' => 'nullable|integer|exists:plans,id',
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    $user = User::create($validatedData);

    return redirect()->route('users.index')->with('success', 'User created successfully.');
}


    // Display the specified user.
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    // Show the form for editing the specified user.
    public function edit(User $user)
    {
        $roles = Role::all();
        $paymentMethods = PaymentMethod::all();
        $plans = Plan::all();
    
        return view('dashboard.users.edit', compact('user', 'roles', 'paymentMethods', 'plans'));
    }

    // Update the specified user in storage.
    public function update(Request $request, User $user)
{
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'phone_number' => 'required|string|max:255',
        'role_id' => 'required|integer|exists:roles,id',
        'payment_method_id' => 'nullable|integer|exists:payment_methods,id',
        'plan_id' => 'nullable|integer|exists:plans,id',
    ]);

    if ($request->filled('password')) {
        $validatedData['password'] = Hash::make($request->password);
    } else {
        unset($validatedData['password']);
    }

    $user->update($validatedData);

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

    

    // Remove the specified user from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }

    public function profileShow()
    {
        $user = auth()->user(); 
        return view('dashboard.users.profile.index', compact('user'));
    }

    public function editProfile(){
        $user = auth()->user(); 
        return view('dashboard.users.profile.edit', compact('user'));
    }
    

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated =$request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            // Add validation for other fields as necessary
        ]);

        // Update user information
        $user->update($validated);

        // Optionally, handle password update if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully.');
    }


}
