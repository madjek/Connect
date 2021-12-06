<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [PassportAuthController::class, 'loginUser']);
Route::post('register', [PassportAuthController::class, 'registerUser']);

Route::post('newgame', [GameController::class, 'create']);

Route::middleware('auth:api')->group(function(){

    Route::post('logout', [PassportAuthController::class, 'logout']);
    Route::get('allusers', [UserController::class, 'showAllUsers']);
    Route::get('profile', [UserController::class, 'showProfile']);
    Route::put('update', [UserController::class, 'updateProfile']);
    Route::delete('delete', [UserController::class, 'deleteProfile']);
});