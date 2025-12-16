<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Nama class harus sama persis dengan nama file
class AdminMiddleware 
{
   public function handle(Request $request, Closure $next)
{
    // Cek apakah sudah login dan apakah rolenya admin
    if (Auth::check() && Auth::user()->role === 'admin') {
        return $next($request);
    }

    // JANGAN redirect ke halaman yang juga pakai middleware ini!
    // Jika user biasa mencoba masuk ke area admin, lempar ke dashboard user saja
    if (Auth::check()) {
        return redirect('/dashboard')->with('error', 'Akses ditolak. Anda bukan Admin.');
    }

    return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
}
}