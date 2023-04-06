<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SauceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [SauceController::class, 'index']);
Route::get('/welcome', [SauceController::class, 'index']);

// Inscription
Route::get('signup', 'App\Http\Controllers\SignupController@signup')
    ->name('signup');
Route::post('store', 'App\Http\Controllers\SignupController@store')
    ->name('store');

// Authentification
Route::get('login', 'App\Http\Controllers\AuthController@login')
    ->name('login');
Route::post('authenticate', 'App\Http\Controllers\AuthController@authenticate')
    ->name('authenticate');
Route::post('logout', 'App\Http\Controllers\AuthController@logout')
    ->name('logout');

// Gérer les sauces
Route::get('sauce/{id}', 'App\Http\Controllers\SauceController@show');
Route::get('/allSauces', 'App\Http\Controllers\SauceController@index')
    ->name('allSauces');

Route::get('/addSauce', 'App\Http\Controllers\SauceController@create')
    ->name('addSauce');
Route::post('/storeSauce', 'App\Http\Controllers\SauceController@store')
    ->name('storeSauce');

// Gérer les likes
