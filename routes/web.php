<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('guest',[
        "title" => "Home"
    ]);
});
Route::get('/login', function(){
    return view('login', [
        "title" => "Login"
    ]);
=======
Route::get('/', [GuestController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/transaction', function () {
    return view('transaction');
>>>>>>> 241685df386d3a5356d33137f16384036be6aea0
});

Route::get('/transaction/konfirmasi-pembayaran', function(){
    return view('konfirmasi-pembayaran');
});

Route::get('/transaction/pembayaran-berhasil', function(){
    return view('pembayaran-berhasil');
});

Route::get('/login/forget-password', function(){
    return view('forget-password',[
        "title" => "Forget Password"
    ]);
});
<<<<<<< HEAD
Route::get('reset-password', function(){
    return view('reset-password',[
        "title" => "Reset Password"
    ]);
});
Route::get('reset-password/berhasil', function(){
    return view('berhasil',[
        "title" => "Success",
        "ubah_password" => "Password Telah Berhasil Diubah",
        "order_selesai" => "Orderan Telah Selesai ",
        "pembayaran_berhasil" => "Pembayaran Telah Berhasil "
    ]);
=======

Route::get('/reset-password', function(){
    return view('reset-password');
});

Route::get('/reset-password/berhasil', function(){
    return view('ubah-password');
>>>>>>> 241685df386d3a5356d33137f16384036be6aea0
});

Route::get('/reset-password/req-send', function(){
    return view('request-password');
});

