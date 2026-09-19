<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginResponse;
use App\Http\Controllers\AdminController;


// Home
Route::get('/', function () {
    return view('admin.users.index');
});
//contact
Route::get('/user-panel/contact', function () {
    return view('user-panel.contact');
})->name('contact');

// LOG OUT
Route::get('/admin/sign-out', function () {
    return view('admin.sign-out');
})->name('sign-out');

Route::post('/logout', [LoginResponse::class, 'Logout'])
    ->name('logout');

// Google Authentication
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// Admin Dashboard
Route::get('admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');

// Admin Setting
Route::get('admin-settings', function () {
    return view('admin.settings');
});

// Products
Route::get('admin-product', [AdminController::class, 'fetchProduct'])->name('admin-product');
Route::post('createProduct', [AdminController::class, 'createProduct'])->name('createProduct');
Route::post('editProduct', [AdminController::class, 'editProduct'])->name('editProduct');
Route::post('deleteProduct', [AdminController::class, 'deleteProduct'])->name('deleteProduct');

// Users
Route::get('admin-users', [AdminController::class, 'fetchUser'])->name('admin-users');
Route::post('editUser', [AdminController::class, 'editUser'])->name('editUser');
Route::post('deleteUser', [AdminController::class, 'deleteUser'])->name('deleteUser');

// Orders
Route::get('admin-orders', [AdminController::class, 'fetchOrder'])->name('admin-orders');
Route::post('editOrder', [AdminController::class, 'editOrder'])->name('editOrder');
Route::post('deleteOrder', [AdminController::class, 'deleteOrder'])->name('deleteOrder');

// Feedback
Route::get('admin-feedback', [AdminController::class, 'feedback'])->name('admin-feedback');
Route::post('editFeedback', [AdminController::class, 'editFeedback'])->name('editFeedback');
Route::post('deleteFeedback', [AdminController::class, 'deleteFeedback'])->name('deleteFeedback');

// Authentication & Role Based Routes
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

    Route::get('/dashboard', [LoginResponse::class, 'restriction'])
        ->name('dashboard');
});
