<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // SHOW FORMS
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {
        return view('register');
    }



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
        ]);

        return redirect('/login')->with('success', 'Registration successful, please login.');
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return back()->withErrors(['username' => 'Invalid username or password.']);
        }

        // Set session
        session([
            'logged_in' => true,
            'current_user' => $user,
        ]);

        return redirect('/dashboard');
    }


    // LOGOUT
    public function logout(Request $request)
    {
        session()->forget('logged_in');
        session()->forget('current_user');

        return redirect('/login');
    }
}
