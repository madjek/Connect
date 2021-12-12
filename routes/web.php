<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RelationController;
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

Route::get('/', [GameController::class, 'index'])->name('game.index'); //main page
Route::get('game/create', [GameController::class, 'create'])->name('game.create'); //add new game page
Route::post('game/new', [GameController::class, 'store'])->name('game.store'); //save new game
Route::get('game/{id}', [GameController::class, 'show'])->name('game.show'); //show game parties
Route::get('game/edit/{id}', [GameController::class, 'edit'])->name('game.edit'); //edit game page
Route::patch('game/{id}', [GameController::class, 'update'])->name('game.update'); //update game
Route::delete('game/{id}', [GameController::class, 'destroy'])->name('game.destroy'); //delete game

Route::get('party/{id}', [PartyController::class, 'show'])->name('party.show'); //show party chat
Route::get('party/create/{id}', [PartyController::class, 'create'])->name('party.create'); //add new party page
Route::post('party/new', [PartyController::class, 'store'])->name('party.store'); //save new party
Route::get('party/edit/{id}', [PartyController::class, 'edit'])->name('party.edit'); //edit party page
Route::patch('party/{id}', [PartyController::class, 'update'])->name('party.update'); //update party
Route::delete('party/{id}', [PartyController::class, 'destroy'])->name('party.destroy'); //delete party

Route::post('party/', [MessageController::class, 'store'])->name('message.store'); //new message
Route::delete('message/{id}', [MessageController::class, 'destroy'])->name('message.destroy'); //delete message

Route::get('auth/login', [PassportAuthController::class, 'log'])->name('auth.log'); //login page
Route::post('auth/login', [PassportAuthController::class, 'login'])->name('auth.login'); //send login data
Route::get('auth/register', [PassportAuthController::class, 'reg'])->name('auth.reg'); //register page
Route::post('auth/register', [PassportAuthController::class, 'register'])->name('auth.register'); //send register data 
Route::get('logout', [PassportAuthController::class, 'logout'])->name('auth.logout'); //logout

Route::get('profile', [UserController::class, 'show'])->name('user.profile'); //profile page
Route::get('profile/edit', [UserController::class, 'edit'])->name('user.edit'); //edit profile

Route::post('party/{id}', [RelationController::class, 'friend'])->name('relation.friend'); //add friend
Route::delete('profile/{id}', [RelationController::class, 'destroy'])->name('relation.destroy'); //delete friend
