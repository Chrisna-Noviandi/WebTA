<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $data = auth()->user()->type;

            if ($data == "Admin") {
                return redirect()->intended('/home1');
            } elseif ($data == "Wakil Prodi") {
                return redirect()->intended('/home-uups');
            } elseif ($data == "Acesor") {
                return redirect()->intended('/home-asesor');
            } elseif ($data == "Pemimpin") {
                return redirect()->intended('/home-pemimpin');
            }
        }

        return back()->with('loginError', 'Login failed !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function direc()
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return redirect()->intended('/home1');
        } elseif ($data == "Wakil Prodi") {
            return redirect()->intended('/home-uups');
        } elseif ($data == "Acesor") {
            return redirect()->intended('/home-asesor');
        } elseif ($data == "Pemimpin") {
            return redirect()->intended('/home-pemimpin');
        } else {
            return redirect()->intended('/login');
        }
    }
}
