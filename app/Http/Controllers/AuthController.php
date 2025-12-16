<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {
        return view('register');
    }

    // PROSES REGISTER
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
            'role'     => 'client', // Gunakan 'client' sesuai ENUM database kamu
        ]);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silakan Login.');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        // 1. Validasi menggunakan 'email' sesuai name="email" di HTML kamu
        $request->validate([
            'email'    => 'required|email', 
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // 2. Cek Login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3. Role Check (Sesuai ENUM di database: admin & client)
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }

            // Jika role adalah client
            return redirect()->intended('/dashboard'); 
        }

        // 4. Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // PROSES LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}