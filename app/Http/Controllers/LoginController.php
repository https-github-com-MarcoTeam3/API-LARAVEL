<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
         $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required']
         ]);

         $user = User::where('email', $request->email)->first();

        if (!$user) {
             throw ValidationException::withMessages([
                 'email' => ['The provided credentials are incorrect']
             ]);
         }

        // return $user->createToken('Auth Token')->accessToken;
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
    }
}