<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PartyController;

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

Route::get('/', [GameController::class, 'index']);
Route::get('game/', [GameController::class, 'index'])->name('game.index');
Route::get('game/create', [GameController::class, 'create'])->name('game.create');
Route::get('game/{id}', [GameController::class, 'show'])->name('game.show');
Route::get('party/{id}', [PartyController::class, 'show'])->name('party.show');
Route::post('game/', [GameController::class, 'store'])->name('game.store');

// Route::get('game/show/', [GameController::class, 'show'])->name('game.show');
