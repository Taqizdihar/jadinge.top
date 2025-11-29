<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data paket dari query string
        $package = $request->package; // daily / weekly / monthly

        // Kirim ke blade
        return view('confirm', compact('package'));
    }

    public function store(Request $request)
    {
        // Validasi jika butuh
        $request->validate([
            'package' => 'required'
        ]);

        // Simpan konfirmasi ke session (tanpa DB)
        session(['confirmed_package' => $request->package]);

        return redirect('/dashboard')->with('success', 'Purchase confirmed successfully!');
    }
}
