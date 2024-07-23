<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function readAll()
    {
        $users = User::all();

        return response()->json([
            'data' => $users,
        ], 200);
    }

    function register(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|unique:users|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user =  User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'data' => $user
        ], 200);
    }

    function login(Request $request)
{
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'unauthorized'
        ], 401);
    }

    $user = User::where('email', $request->email)->firstOrFail();
    $tokenResult = $user->createToken('auth_token');
    $token = $tokenResult->plainTextToken;

    return response()->json([
        'data' => $user,
        'token' => $token
    ], 201);
}

}

