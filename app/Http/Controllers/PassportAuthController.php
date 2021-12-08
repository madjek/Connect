<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class PassportAuthController extends Controller{
    
    public function reg(){
    
        return view('auth.register');
    }

    public function register(Request $request){

        $request->validate([
            'username' => 'required|string|min:3|max:20',
            'steamUsername' => 'required|string|max:20',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'avatar' => 'string'
        ]);

        $rand = rand(1, 100);

        User::create([
            'username' => $request->username,
            'steamUsername' => $request->steamUsername,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => "https://avatars.dicebear.com/api/bottts/'.$rand.'.svg"
        ]);
        
        return redirect()->route('auth.login')->with('success', 'You are registrated');
    }
    
    public function log(){
        
        return view('auth.login');
    }
    
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){

            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            $token->save();       

            return redirect()->route('game.index')->with('success', 'Signed in');
            
        } else {
            return redirect()->route('auth.login')->with('error', 'Email or password is incorrect');
        }        
    }
    
    public function logout(){
        
        Session::flush();
        Auth::logout();

        return redirect()->route('game.index')->with('success', 'Successfully logged out');
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

}
