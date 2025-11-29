<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
       
        if (!session('logged_in')) {
            return redirect('/login');
        }

        $user = session('current_user');

        return view('dashboard', compact('user'));
    }
}
