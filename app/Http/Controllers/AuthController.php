<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Memproses login
    public function processLogin(Request $request)
    {
        

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect('/admin');
        } else{
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput();
        }

       
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}
