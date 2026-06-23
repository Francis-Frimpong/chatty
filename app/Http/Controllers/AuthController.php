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
}
