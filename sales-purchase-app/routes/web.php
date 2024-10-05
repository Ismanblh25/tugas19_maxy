<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesTransactionController;
use App\Http\Controllers\PurchaseTransactionController;
use App\Http\Controllers\HomeController;

// Halaman welcome yang bisa diakses publik
Route::get('/', function () {
    return view('welcome');
});

// Rute otentikasi (login, register, dll.)
Auth::routes();

// Rute home (sudah termasuk dalam Auth::routes(), tapi jika ingin eksplisit, tetap bisa ditambahkan)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute yang hanya bisa diakses oleh pengguna yang terautentikasi
Route::middleware('auth')->group(function () {
    Route::resource('sales-transactions', SalesTransactionController::class);
    Route::resource('purchase-transactions', PurchaseTransactionController::class);
});
