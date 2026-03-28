<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;


Route::view('/', 'home')->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');


Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);

Route::middleware('auth')->group(function(){
Route::view('/profile', 'auth.profile')->name('profile');
    Route::post('/logout', LogoutController::class);

});
