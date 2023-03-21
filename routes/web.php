<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('guest');
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

Route::get('/fav', function(){
    return view('fav',  [
        "title" => "Favorit"
    ]);
});

Route::get('/notif', function(){
    return view('notif',  [
        "title" => "Notifikasi & History"
    ]);
});

Route::get('/login', function(){
    return view('login');
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

