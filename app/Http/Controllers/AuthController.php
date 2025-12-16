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
            'role'     => 'client', // default user
        ]);

        return redirect('/login')->with('success', 'Registration successful');
    }

    // 🔥 LOGIN FIX (Disesuaikan dengan name="username" di blade teman Anda)
    public function login(Request $request)
    {
<<<<<<< HEAD
        // 1. CEK APAKAH DATA SAMPAI KE CONTROLLER?
        //dd($request->all()); // <--- Hapus komentar ini, lalu coba submit form. 
        // Jika layar berubah jadi hitam berisi data JSON, berarti Routing & Form BENAR.
        // Jika tetap looping, berarti Form HTML Anda yang salah (Action/Method).

        $credentials = $request->validate([
            'email'    => 'required|email',
=======
        // 1. Validasi mengikuti nama input di blade teman Anda yaitu 'username'
        $request->validate([
            'username' => 'required', 
>>>>>>> ddffb3d0dea7db024a48e2c20e7ae6fd7368202f
            'password' => 'required',
        ]);

        // 2. Mapping: Ambil isi dari input 'username' untuk dicek ke kolom 'email' di database
        $credentials = [
            'email'    => $request->username, 
            'password' => $request->password,
        ];

<<<<<<< HEAD
            // 2. CEK APAKAH LOGIN BERHASIL TAPI SALAH REDIRECT?
            // dd('Login Berhasil, User: ' . auth()->user()->name); // <--- Hapus komentar ini.
            // Jika muncul tulisan ini, berarti user BERHASIL login, tapi error di logic redirect bawahnya.

            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect('/dashboard');
        }

        // 3. CEK APAKAH LOGIN GAGAL?
        dd('Login Gagal, Password/Email Salah'); // <--- Hapus komentar ini.
        // Jika muncul tulisan ini, berarti password di DB dan inputan tidak cocok.

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
=======
        // ... bagian login ...
if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    // 🔐 ROLE CHECK
    if (Auth::user()->role === 'admin') {
        // Gunakan intended agar jika user mau ke dashboard admin, dia tidak tertahan
        return redirect()->intended(route('admin.dashboard'));
>>>>>>> ddffb3d0dea7db024a48e2c20e7ae6fd7368202f
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