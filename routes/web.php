<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('signup', function () {
    return view('signup');
})->name('signup');


Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth:sanctum'])->get('farmers', function () {
    return view('farmers');
})->name('farmers');

Route::controller(AuthController::class)->group(function(){
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
    Route::post('signup', 'register')->name('register.post');
    Route::post('signin', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');


});