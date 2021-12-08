<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\User;

class UserController extends Controller{
    
    public function showAllUsers(){

        try {
            return User::all();
        } catch(QueryException $error) {
            return $error;
        }
    } 

    public function show(Request $request)
    {
        $user = $request->user();
        return view('users.profile', compact('user'));
    }
}
