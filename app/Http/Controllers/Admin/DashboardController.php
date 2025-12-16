<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads; // Pastikan baris ini ada jika Anda menggunakan model Ads

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data Statistik Atas
        $activeAds = 12; // Gunakan angka manual jika tabel 'ads' belum siap
        $locations = 5; 
        $revenue = 5000000; 

        // 2. Data untuk Grafik (Variabel yang menyebabkan error)
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
        $monthlyRevenue = [1000000, 1500000, 1200000, 2000000, 1800000, 2500000];

        // 3. Kirim SEMUA variabel ke view
        return view('admin.dashboard', compact(
            'activeAds', 
            'locations', 
            'revenue', 
            'months', 
            'monthlyRevenue'
        ));
    }
}