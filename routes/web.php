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

// login page
Route::get('login', function () {
    return view('login');
})->name('login');

// signup page
Route::get('signup', function () {
    return view('signup');
})->name('signup');

// forgot password form page
Route::get('forgot-password', function () {
    return view('forgotPass');
})->middleware('guest')->name('password.request');

//forgot password form processing route
Route::post('/forgot-password', [AuthController::class, 'forgot_password'])->middleware('guest')->name('password.email');

// Reset password view
Route::get('/reset-password/{token}', function (string $token) {
    return view('resetPass', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Reset Password processing route
Route::post('/reset-password', [AuthController::class, 'reset_password'])->middleware('guest')->name('password.update');

// Dashboard view
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

//Farmers pannel view
Route::middleware(['auth'])->get('farmers', function () {
    return view('farmers');
})->name('farmers');

// Auth routes
Route::controller(AuthController::class)->group(function(){
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
    Route::post('signup', 'register')->name('register.post');
    Route::post('signin', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');


});