<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


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


});
Route::get('/user', function () {
    return view('user');
});

    Route::get('/dashboard' , function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('admin-add-user', function () {
    return view('admin.pages.add-user');
});
Route::get('admin-reports', function () {
    return view('admin.pages.reports');
});
Route::get('admin-add-product', function () {
    return view('admin.pages.add-product');
});
Route::get('admin-index', function () {
    return view('admin.pages.index');
});
Route::get('admin-profile', function () {
    return view('admin.pages.profile');
});
Route::get('admin-settings', function () {
    return view('admin.pages.settings');
});
Route::get('admin-manage-orders', function () {
    return view('admin.pages.manage-orders');
});
Route::get('admin-user-details', function () {
    return view('admin.pages.user-details');
});
Route::get('admin-users', function () {
    return view('admin.pages.users');
});