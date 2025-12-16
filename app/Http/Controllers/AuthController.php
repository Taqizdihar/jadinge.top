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

    // 🔥 LOGIN FIX
    public function login(Request $request)
    {
        // 1. CEK APAKAH DATA SAMPAI KE CONTROLLER?
        //dd($request->all()); // <--- Hapus komentar ini, lalu coba submit form. 
        // Jika layar berubah jadi hitam berisi data JSON, berarti Routing & Form BENAR.
        // Jika tetap looping, berarti Form HTML Anda yang salah (Action/Method).

        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

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
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
