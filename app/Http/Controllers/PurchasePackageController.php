<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasePackageController extends Controller
{
    // Show the Purchase Package page
    public function index(Request $request)
    {
        // Retrieve selected package from query (optional)
        $package = $request->package ?? null;

        return view('PurchasePackage', compact('package'));
    }

    // Handle purchase submission
    public function store(Request $request)
    {
        $request->validate([
            'package' => 'required'
        ]);

        // Store the selected package in session (optional)
        session(['selected_package' => $request->package]);

        return redirect()->route('confirm')->with('success', 'Package selected successfully.');
    }
}
