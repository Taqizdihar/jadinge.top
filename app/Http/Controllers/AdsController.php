<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function create()
    {
        return view('ads');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_name' => 'required|string|max:255',
            'media_file' => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:10240',
        ]);

        $filePath = $request->file('media_file')->store('ads', 'public');

        // Simpan DB kalau perlu
        // Ads::create([...]);

        return redirect()
            ->route('ads.create')
            ->with('success', 'Data iklan berhasil dikirim');
    }
}
