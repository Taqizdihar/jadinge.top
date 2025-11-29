<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConfirmController;  
use App\Http\Controllers\PurchasePackageController;


Route::get('/', [PageController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchase.store');

Route::get('/confirm', [ConfirmController::class, 'index'])->name('confirm');
Route::post('/confirm', [ConfirmController::class, 'store'])->name('confirm.store');

// Purchase Package Page
Route::get('/purchase-package', [PurchasePackageController::class, 'index'])
    ->name('purchase.package');

Route::post('/purchase-package', [PurchasePackageController::class, 'store'])
    ->name('purchase.package.store');

