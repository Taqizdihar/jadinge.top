<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // 1. Hapus pengecekan session manual (!session('logged_in'))
        // Karena Route di web.php sudah pakai ->middleware('auth')

        // 2. Ambil data user yang sedang login menggunakan Auth bawaan Laravel
        $user = Auth::user();

        // 3. Kirim data ke view
        return view('dashboard', compact('user'));
    }
}