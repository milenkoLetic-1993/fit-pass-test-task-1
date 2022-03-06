<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportFacilityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\CardController;

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

Route::get('sport-facilities', [SportFacilityController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
Route::get('cards', [CardController::class, 'index']);
Route::get('reception', [ReceptionController::class, 'scanCard']);
