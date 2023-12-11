<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PendaftaranControllerController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SuperAdminController;
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
    return view('welcome');
});

// routes/web.php
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('proses.login');

// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');
Route::get('/peserta/create', [PesertaController::class,'create'])->name('peserta.create');
    Route::post('/peserta', [PesertaController::class,'store'])->name('peserta.store');
        Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
// routes/web.php



Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran/process', [PembayaranController::class, 'process'])->name('pembayaran.process');

// Route::middleware(['auth:admin'])->group(function () {
//     Route::post('/admin/login', [AdminAuthController::class, 'login']);
// });
// routes/web.php


// routes/web.php


Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/laporan/cari', [LaporanController::class, 'cari'])->name('laporan.cari');
Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
//profil
Route::middleware(['admin'])->group(function () {
Route::get('/profil', [AdminAuthController::class, 'profil'])->name('admin.profil');
Route::post('/change-password', [AdminAuthController::class, 'changePassword'])->name('admin.change-password');

});


Route::prefix('superadmin')->group(function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/daftarakun', [AdminAuthController::class, 'registration'])->name('admin.akun');
    Route::post('register', [AdminAuthController::class, 'register_action'])->name('register.action');
    Route::get('/lappeserta', [PesertaController::class, 'laporan'])->name('peserta.laporan');
    Route::get('/payment', [SuperAdminController::class, 'payment'])->name('superadmin.payment');
    Route::get('/report', [SuperAdminController::class, 'report'])->name('superadmin.report');
    Route::get('/account-list', [SuperAdminController::class, 'accountList'])->name('superadmin.accountList');
    Route::get('/lappembayaran', [PembayaranController::class, 'laporan'])->name('pembayaran.laporan');
});