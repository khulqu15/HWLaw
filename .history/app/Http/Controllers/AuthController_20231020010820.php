<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller {
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password))
            return redirect('/login')->withCookie(Cookie::make('error', 'Invalid credentials', 1));
        $token = JWTAuth::fromUser($user);
        return redirect('/login')->withCookie(Cookie::make('token', $token, 1));
    }
}

