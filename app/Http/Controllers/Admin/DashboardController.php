<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;

class DashboardController extends Controller
{
    public function index()
    {
        $activeAds = Ads::where('status', 'active')->count();
        $locations = 5; // contoh dummy data

        return view('admin.dashboard', compact('activeAds', 'locations'));
    }
}
