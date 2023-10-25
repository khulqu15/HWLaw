<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller {
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user = User::where('email', $request->email)->first();
        if(!$token = JWTAuth::attempt($request->only(['email', 'password'])))
            return response()->json(['error' => 'Invalid credentials'], 401);

        return response()->json(['token' => $token, 'user' => $user], 200);
    }
}

