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

Route::get('/', [GuestController::class, 'index'])->middleware('guest');
Route::post('/', [LoginController::class, 'logout']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/user', [UserController::class, 'index'])->middleware(`'role:0'`);
Route::get('/admin', [AdminController::class, 'index'])->middleware(`'role:1'`);

Route::post('/admin/add-cake', [AdminController::class, 'addCake'])->middleware(`'role:1'`);

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
    return view('forget-password',[
        "title" => "Forget Password"
    ]);
});
Route::get('/reset-password', function(){
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

Route::get('/halaman-utama', function(){
    return view('halaman-utama',[
        "title" => 'Halaman Utama'
    ]);
    
});