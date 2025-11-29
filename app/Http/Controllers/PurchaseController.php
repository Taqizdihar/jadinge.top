<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $selected = $request->package ?? null;

        return view('purchase', compact('selected'));
    }

    public function store(Request $request)
    {
        // your store logic here
    }
}
