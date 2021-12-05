<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;

class PassportAuthController extends Controller
{
    public function registerUser(Request $request){

        $this ->validate( $request, [
            'username' => 'required|string|min:3|max:20',
            'steamUsername' => 'required|string|max:20',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'avatar' => 'string'
        ], [
            'username.required' => 'Username is required',
            'steamUsername.required' => 'SteamUsername is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

            User::create([
                'username' => $request->username,
                'steamUsername' => $request->steamUsername,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'avatar' => $request->avatar
            ]);

        return response()->json([
            'message' => 'User successfully created!',
        ], 201);
    }

    public function loginUser(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($data)){
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
            
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function logout(Request $request){

        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
