<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials,$request->remember)) 
        {
            //berhasil login
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin.home');
                case 'mahasiswa':
                    return redirect()->route('mahasiswa.home');
                default:
                    return redirect()->route('loginPage')->with('warning', 'Terjadi Kesalahan');
            }

        }else{
            //gagal login
            return redirect()->route('loginPage');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'Anda berhasil logout');
    }

    public function home_admin()
    {

        return view('admin.home');
    }

    public function home_mahasiswa()
    {

        return view('mahasiswa.home');
    }
}
