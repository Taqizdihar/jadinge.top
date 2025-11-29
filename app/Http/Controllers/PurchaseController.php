<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // tampilkan halaman purchase
    public function index()
    {
        return view('purchase');
    }

    // proses pembelian (opsional)
    public function store(Request $request)
    {
        // contoh validasi
        $request->validate([
            'package' => 'required',
        ]);

        // simpan data ke session (tanpa db)
        session(['purchase' => $request->package]);

        return redirect('/purchase')->with('success', 'Package purchased successfully!');
    }
}
