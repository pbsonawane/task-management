<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid login'], 401);
        }

        $token = $request->user()->createToken('api-token')->plainTextToken;
        return response()->json(['token' => $token]);
    }
}
