<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PassportAuthController;
use Laravel\Passport\Passport;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route:: get(uri:'/', action:'GameController@index');

// Route::get('/', [GameController::class, 'index']);
Route::get('/', [GameController::class, 'index'])->name('game.index');
Route::get('game/create', [GameController::class, 'create'])->name('game.create');
Route::post('game/', [GameController::class, 'store'])->name('game.store');
Route::get('game/{id}', [GameController::class, 'show'])->name('game.show');
Route::get('party/{id}', [PartyController::class, 'show'])->name('party.show');

Route::get('auth/login', [PassportAuthController::class, 'log'])->name('auth.log');
Route::post('auth/login', [PassportAuthController::class, 'login'])->name('auth.login');
Route::get('auth/register', [PassportAuthController::class, 'reg'])->name('auth.reg');
Route::post('auth/register', [PassportAuthController::class, 'register'])->name('auth.register');
Route::get('logout', [PassportAuthController::class, 'logout'])->name('auth.logout');
