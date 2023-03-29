<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// role:0 UNTUK USER, role:1 UNTUK ADMIN

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
});

// ADMIN
Route::middleware(['role:1'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/add-cake', [AdminController::class, 'addCake']);
    Route::post('/admin/add-cake', [AdminController::class, 'createCake']);
    Route::get('/admin/add-cake/add-cake-success', [AdminController::class, 'addCakeSuccess']);
});

Route::get('/otp', function () {
    return view('otp', [
        "title" => "OTP"
    ]);
});

Route::get('/transaction', function () {
    return view('transaction', [
        "title" => "Transaction"
    ]);
});

Route::get('/transaction/konfirmasi-pembayaran', function(){
    return view('konfirmasi-pembayaran',  [
        "title" => "Konfirmasi Pembayaran"
    ]);
});

Route::get('/transaction/pembayaran-berhasil', function(){
    return view('pembayaran-berhasil',  [
        "title" => "Pembayaran Berhasil"
    ]);
});

Route::get('/favorite', function(){
    return view('favorite',  [
        "title" => "Favorit"
    ]);
});

Route::get('/notif', function(){
    return view('notif',  [
        "title" => "Notifikasi & History"
    ]);
});

Route::get('/login/forget-password', function(){
    return view('forget-password');
});

Route::get('/reset-password', function(){
    return view('reset-password');
});

Route::get('/reset-password/berhasil', function(){
    return view('ubah-password');
});

Route::get('/reset-password/req-send', function(){
    return view('request-password');
});

