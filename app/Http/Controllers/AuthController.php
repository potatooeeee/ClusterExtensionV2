<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Handle registration
  public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name'     => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->sendEmailVerificationNotification();

        return response("Registration successful. Please check your email to verify.", 200);
    }

    // Handle login
  public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (!Auth::user()->hasVerifiedEmail()) {
                Auth::logout();
                return response('Please verify your email before logging in.', 403);
            }

            return response('input-form', 200);
        }

        return response('Invalid email or password', 401);
    }
}
