<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginResponse;




Route::get('/', function () {
    return view('welcome');
});


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin', function () {
    return view('admin');
})->middleware('role:admin');

Route::get('/user', function () {
    return view('user');
})->middleware('role:user');

Route::get('/dashboard' , [LoginResponse::class, 'restriction'])
      ->name('dashboard');
      
});