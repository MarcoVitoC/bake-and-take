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
    return view('guest',[
        "title" => "Home"
    ]);
});
Route::get('/login', function(){
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/login/forget-password', function(){
    return view('forget-password',[
        "title" => "Forget Password"
    ]);
});
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
});
Route::get('/reset-password/req-send', function(){
    return view('request-password');
});