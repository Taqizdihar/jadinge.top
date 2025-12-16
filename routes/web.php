<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\PurchasePackageController;
use App\Http\Controllers\PaymentStatusController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AdsDetailController;

// Halaman landing
Route::get('/', [PageController::class, 'index'])->name('landing');

// Auth (Akses publik)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Ads publik
Route::get('/ads', [AdsController::class, 'create'])->name('ads.create');
Route::post('/ads', [AdsController::class, 'store'])->name('ads.store');
Route::get('/ads/detail', [AdsDetailController::class, 'index'])->name('ads.detail');

// ==========================================================
// ROUTE TERAUTENTIKASI (Harus Login)
// ==========================================================
Route::middleware('auth')->group(function () {
    
    // Route User Biasa
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
    Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchase.store');
    Route::get('/confirm', [ConfirmController::class, 'index'])->name('confirm');
    Route::post('/confirm', [ConfirmController::class, 'store'])->name('confirm.store');
    Route::get('/purchase-package', [PurchasePackageController::class, 'index'])->name('purchase.package');
    Route::post('/purchase-package', [PurchasePackageController::class, 'store'])->name('purchase.package.store');
    Route::get('/payment/status/{invoice}', [PaymentStatusController::class, 'show'])->name('payment.status');
    Route::get('/payment/status/{invoice}/check', [PaymentStatusController::class, 'check'])->name('payment.status.check');

    // ==========================================================
    // ROUTE KHUSUS ADMIN (Harus Login DAN Punya Role Admin)
    // ==========================================================
    Route::middleware('admin')->prefix('admin')->group(function () {
        
        // Pastikan penulisan AdminDashboardController sesuai dengan alias yang Anda buat di atas file
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Admin Ads Management
        Route::get('/ads', function () {
            $ads = [
                (object)['id'=>1,'title'=>'Iklan A','price'=>100000,'status'=>'aktif'],
                (object)['id'=>2,'title'=>'Iklan B','price'=>200000,'status'=>'nonaktif'],
                (object)['id'=>3,'title'=>'Iklan C','price'=>150000,'status'=>'aktif'],
            ];
            return view('admin.ads.index', compact('ads'));
        })->name('admin.ads.index');

        Route::get('/ads/create', function () { return view('admin.ads.create'); })->name('admin.ads.create');
        Route::post('/ads', function () { return redirect()->route('admin.ads.index'); })->name('admin.ads.store');
        Route::get('/ads/{id}/edit', function ($id) { return view('admin.ads.edit', compact('id')); })->name('admin.ads.edit');
        Route::delete('/ads/{id}', function ($id) { return redirect()->route('admin.ads.index'); })->name('admin.ads.destroy');

        // Admin Payments
        Route::get('/payments', function () {
            $payments = [
                (object)['id'=>1,'invoice'=>'INV001','user'=>(object)['name'=>'User A'],'amount'=>150000],
                (object)['id'=>2,'invoice'=>'INV002','user'=>(object)['name'=>'User B'],'amount'=>250000],
                (object)['id'=>3,'invoice'=>'INV003','user'=>(object)['name'=>'User C'],'amount'=>100000],
            ];
            return view('admin.payments.index', compact('payments'));
        })->name('admin.payments');

        Route::get('/payments/{id}/approve', function ($id) { return redirect()->route('admin.payments'); })->name('admin.payments.approve');
        Route::get('/payments/{id}/reject', function ($id) { return redirect()->route('admin.payments'); })->name('admin.payments.reject');
    }); // Penutup grup admin
}); // Penutup grup auth