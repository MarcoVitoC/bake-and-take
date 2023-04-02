<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::post('/', [LoginController::class, 'logout']);

// GUEST
Route::middleware(['guest'])->group(function() {
    Route::get('/', [GuestController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authentication']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);
});

// USER
Route::middleware(['role:0'])->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/product-detail/{id}', [UserController::class, 'showProductDetail'])->name('productDetail');
    Route::post('/user/product-detail/{id}', [UserController::class, 'orderCake']);
    Route::get('/user/payment-confirmation/{id}', [UserController::class, 'paymentConfirmation'])->name('paymentConfirmation');
    Route::delete('/user/payment-confirmation/{transactionDetail}', [UserController::class, 'cancelTransaction']);
    Route::get('/user/payment-success', [UserController::class, 'paymentSuccess']);
    Route::get('/user/favorite', [UserController::class, 'showFavorite']);
    Route::post('/user/product-detail/{id}', [UserController::class, 'addFavorite']);
    Route::delete('/user/product-detail/{id}', [UserController::class, 'removeFavorite']);
    Route::delete('/user/favorite', [UserController::class, 'deleteFavorite']);
    Route::get('/user/transaction', [UserController::class, 'showTransaction']);
    Route::put('/user/transaction', [UserController::class, 'updateTransactionStatus']);
    Route::get('/user/transaction/transaction-detail/{id}', [UserController::class, 'showTransactionDetail']);
});

// ADMIN
Route::middleware(['role:1'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::put('/admin', [AdminController::class, 'updateTransactionStatus']);
    Route::get('/admin/add-cake', [AdminController::class, 'addCake']);
    Route::post('/admin/add-cake', [AdminController::class, 'createCake']);
    Route::get('/admin/add-cake/add-cake-success', [AdminController::class, 'addCakeSuccess']);
    Route::get('/admin/edit-cake/{id}', [AdminController::class, 'editCake']);
    Route::get('/admin/update-cake/{id}', [AdminController::class, 'changeCake']);
    Route::put('/admin/update-cake/{cake}', [AdminController::class, 'updateCake']);
    Route::get('/admin/update-cake-success', [AdminController::class, 'updateCakeSuccess']);
    Route::get('/admin/delete-cake/{id}', [AdminController::class, 'deleteCakeConfirmation']);
    Route::delete('/admin/delete-cake/{cake}', [AdminController::class, 'deleteCake']);
    Route::get('/admin/delete-cake-success', [AdminController::class, 'deleteCakeSuccess']);
});

// Route::get('/login/forget-password', function(){
//     return view('forget-password');
// });

// Route::get('/reset-password', function(){
//     return view('reset-password');
// });

// Route::get('/reset-password/berhasil', function(){
//     return view('ubah-password');
// });

// Route::get('/reset-password/req-send', function(){
//     return view('request-password');
// });

// Route::get('/otp', function () {
//     return view('otp', [
//         "title" => "OTP"
//     ]);
// });