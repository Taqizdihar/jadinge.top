<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad; // Pengenal agar database Iklan terbaca

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Mengambil jumlah iklan aktif dari database
            $activeAds = Ad::where('status', 'active')->count();
        } catch (\Exception $e) {
            // Jika tabel 'ads' belum dibuat, gunakan angka manual agar tidak error 500
            $activeAds = 12; 
        }

        // Data statistik tambahan
        $locations = 5; 
        $revenue = 5000000; 

        // Data untuk Grafik (Labels dan Data Points)
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
        $monthlyRevenue = [1000000, 1500000, 1200000, 2000000, 1800000, 2500000];

        // Kirim semua variabel ke view admin/dashboard.blade.php
        return view('admin.dashboard', compact(
            'activeAds', 
            'locations', 
            'revenue', 
            'months', 
            'monthlyRevenue'
        ));
    }
}