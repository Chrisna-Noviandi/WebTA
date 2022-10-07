<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LEDController extends Controller
{
    public function index()
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.led');
        } else {
            return redirect()->intended('/home');
        }
    }
    public function save(Request $request)
    {
        dd($request);
    }
}
