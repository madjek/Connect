<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PassportAuthController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [PassportAuthController::class, 'loginUser']);
Route::post('register', [PassportAuthController::class, 'registerUser']);

Route::middleware('auth:users')->group(function(){

    Route::post('logout', [PassportAuthController::class, 'logout']);
    Route::get('allusers', [UserController::class, 'showAllUsers']);
    Route::post('profile', [UserController::class, 'showProfile']);
    Route::put('update', [UserController::class, 'updateProfile']);
    Route::delete('delete', [UserController::class, 'deleteProfile']);
});