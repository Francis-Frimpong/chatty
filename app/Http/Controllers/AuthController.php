<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegister()
    {
        return view('register');
    }

    // Handle registration form submission
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/chat');
    }
    
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Step B: Attempt login
        // Auth::attempt() does three things:
        //  1. Finds the user by email
        //  2. Runs Hash::check(input_password, stored_hash)
        //  3. If matched, writes user ID to session and returns true

        if(Auth::attempt($credentials, $request->boolean('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('/chatty');
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records',
        ])->onlyInput('email');
    }

    // Log out
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
