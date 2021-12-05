<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\User;

class UserController extends Controller
{
    public function showAllUsers(){

        try {
            return User::all();
        } catch(QueryException $error) {
            return $error;
        }
    }

    public function showProfile(Request $request){

        $id = $request->input('id');

        try {

            return User::all()->where('id', '=', $id)
            ->makeHidden(['password'])->keyBy('id');

        } catch (QueryException $error) {
            return $error;
        }
    }
    
    public function updateProfile(Request $request){

        $id = $request->input('id');

        $validatedUpdate = $request->validate([
            'id' => 'required',
            'username' => 'required|string|min:3|max:20',
            'steamUsername' => 'required|string|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'avatar' => 'string'
        ], [
            'username.required' => 'Username is required',
            'steamUsername.required' => 'SteamUsername is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        try {
            return User::where('id', '=', $id)
                    ->update($validatedUpdate);

        } catch (QueryException $error) {
            $eCode = $error->errorInfo[1];

            if($eCode == 1062) {
                return response()->json([
                    'error' => "E-mail already registered"
                ]);
            }
        }
    }    
}
