<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validate the input
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Check if user exists and password is correct
        if (!Auth::attempt($fields)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // 3. Generate and return the Sanctum token
        $user = Auth::user();
        $token = $user->createToken('react-app')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }
}