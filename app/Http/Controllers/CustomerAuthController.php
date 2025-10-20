<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    /**
     * Show the registration form
     */
    public function showRegister()
    {
        return view('auth.register'); 
    }

    /**
     * Handle registration form submission
     */
    public function registerSubmit(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
        ]);

       
        Customer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

       
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    /**
     * Show the login form
     */
    public function showLogin()
    {
        return view('auth.login'); 
    }

    /**
     * Handle login form submission
     */
    public function loginSubmit(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

       
        $customer = Customer::where('email', $credentials['email'])->first();

        
        if ($customer && Hash::check($credentials['password'], $customer->password)) {
            
            session([
                'customer_id' => $customer->id,
                'customer_name' => $customer->name,
            ]);

            return redirect()->route('home')->with('success', 'Welcome back, ' . $customer->name . '!');
        }

        return back()->with('error', 'Invalid email or password.');
    }
}
