<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
<<<<<<< HEAD
use App\Http\Controllers\LoginResponse;




Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\AdminController;
>>>>>>> fa872e90506a2f295432c754cf4b1e4c73cb13ee


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// 
// 
// 

Route::get('admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');

// products
Route::get('product-create', function () {
    return view('admin.products.create');
})->name('product-create');
Route::get('admin-product', [AdminController::class, 'fetchProduct'])->name('admin-product');
Route::post('createProduct', [AdminController::class, 'createProduct'])->name('createProduct');
Route::post('/editProduct', [AdminController::class, 'editProduct'])->name('editProduct');
Route::post('/deleteProduct', [AdminController::class, 'deleteProduct'])->name('deleteProduct');
// user
Route::get('admin-users', [AdminController::class, 'fetchUser'])->name('admin-users');
Route::post('editUser', [AdminController::class, 'editUser'])->name('editUser');
Route::post('deleteUser', [AdminController::class, 'deleteUser'])->name('deleteUser');
// order
Route::get('admin-orders', [AdminController::class, 'fetchOrder'])->name('admin-orders');
Route::post('editOrder', [AdminController::class, 'editOrder'])->name('editOrder');
Route::post('deleteOrder', [AdminController::class, 'deleteOrder'])->name('deleteOrder');
// feedback
Route::get('admin-feedback', [AdminController::class, 'feedback'])->name('admin-feedback');
Route::post('editFeedback', [AdminController::class, 'editFeedback'])->name('editFeedback');
Route::post('deleteFeedback', [AdminController::class, 'deleteFeedback'])->name('deleteFeedback');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

<<<<<<< HEAD
    Route::get('/admin', function () {
    return view('admin');
})->middleware('role:admin');

Route::get('/user', function () {
    return view('user');
})->middleware('role:user');

Route::get('/dashboard' , [LoginResponse::class, 'restriction'])
      ->name('dashboard');
      
});
=======
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 
// 

Route::get('admin-reports', function () {
    return view('admin.reports');
});
Route::get('admin-profile', function () {
    return view('admin.profile');
});
Route::get('admin-settings', function () {
    return view('admin.settings');
});
Route::get('admin-manage-orders', function () {
    return view('admin.manage-orders');
});
>>>>>>> fa872e90506a2f295432c754cf4b1e4c73cb13ee
