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
    Route::get('/login/forgot-password', [LoginController::class, 'showForgotPassword']);
    Route::post('/login/forgot-password', [LoginController::class, 'forgotPassword']);
    Route::get('/reset-password/{id}', [LoginController::class, 'showResetPassword'])->name('resetPassword');
    Route::put('/reset-password/{id}', [LoginController::class, 'resetPassword']);
    Route::get('/reset-password-success', [LoginController::class, 'resetPasswordSuccess']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);
});

// USER
Route::middleware(['role:0'])->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/product-detail/{id}', [UserController::class, 'showProductDetail'])->name('productDetail');
    Route::post('/user/product-detail/{id}', [UserController::class, 'handleUserAction']);
    Route::get('/user/payment-confirmation/{id}', [UserController::class, 'paymentConfirmation'])->name('paymentConfirmation');
    Route::delete('/user/payment-confirmation/{transactionDetail}', [UserController::class, 'cancelTransaction']);
    Route::get('/user/payment-success', [UserController::class, 'paymentSuccess']);
    Route::get('/user/favorite', [UserController::class, 'showFavorite']);
    Route::delete('/user/product-detail/{id}', [UserController::class, 'removeFavorite']);
    Route::delete('/user/favorite', [UserController::class, 'deleteFavorite']);
    Route::get('/user/transaction', [UserController::class, 'showTransaction']);
    Route::put('/user/transaction', [UserController::class, 'updateTransactionStatus']);
    Route::get('/user/transaction/transaction-detail/{id}', [UserController::class, 'showTransactionDetail']);
    Route::get('/user/profile', [UserController::class, 'showUserProfile']);
    Route::get('/user/profile/update-profile', [UserController::class, 'editProfile']);
    Route::put('/user/profile/update-profile', [UserController::class, 'updateProfile']);
    Route::get('/user/profile/update-profile-success', [UserController::class, 'updateProfileSuccess']);
    Route::get('/user/profile/change-password', [UserController::class, 'changePassword']);
    Route::put('/user/profile/change-password', [UserController::class, 'updatePassword']);
    Route::get('/user/profile/change-password-success', [UserController::class, 'updatePasswordSuccess']);
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

