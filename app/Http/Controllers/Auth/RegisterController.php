<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Make sure you have the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Show the registration form (optional if handled by route closure)
    public function showRegistrationForm()
    {
        return view('pages.register');
    }

    // Handle user registration
    public function register(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in automatically
        Auth::login($user);

        // Redirect to dashboard or home page
        return redirect()->route('dashboard')->with('success', 'Registration successful! Welcome.');
    }
}
