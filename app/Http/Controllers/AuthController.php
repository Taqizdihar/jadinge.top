<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // FORM
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {
        return view('register');
    }

    // REGISTER
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:5',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role'     => 'user', // default user
        ]);

        return redirect('/login')->with('success', 'Registration successful');
    }

    // 🔥 LOGIN FIX (Disesuaikan dengan name="username" di blade teman Anda)
    public function login(Request $request)
    {
        // 1. Validasi mengikuti nama input di blade teman Anda yaitu 'username'
        $request->validate([
            'username' => 'required', 
            'password' => 'required',
        ]);

        // 2. Mapping: Ambil isi dari input 'username' untuk dicek ke kolom 'email' di database
        $credentials = [
            'email'    => $request->username, 
            'password' => $request->password,
        ];

        // ... bagian login ...
if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    // 🔐 ROLE CHECK
    if (Auth::user()->role === 'admin') {
        // Gunakan intended agar jika user mau ke dashboard admin, dia tidak tertahan
        return redirect()->intended(route('admin.dashboard'));
    }

    // Arahkan user biasa ke dashboard mereka
    return redirect()->intended('/dashboard'); 
}
}
// ...

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}