<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegistrasi()
    {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('login')->with("Register Berhasil");
    }

    function tampilLogin()
    {
        return view('login');
    }

    function submitLogin(Request $request)
    {
        $data = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            // Set session flash message untuk sambutan login
            session()->flash('login_success', 'Halo, ' . Auth::user()->name . '! Anda telah berhasil login.');

            return redirect()->route('siswa.tampil');
        } else {
            return redirect()->back()->with('gagal', 'Email atau password anda salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
