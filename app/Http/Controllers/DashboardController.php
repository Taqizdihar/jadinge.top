<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login lewat sistem Auth Laravel
        $user = Auth::user();

        // Pastikan tidak ada redirect() lagi di sini
        return view('dashboard', compact('user'));
    }
}