<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


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

        // $data = $request;
        // view()->share('data', $data);
        // $pdf = PDF::loadView('wakil.pdf');
        // return $pdf->download('pdf_file.pdf');

        $header = array(
            'Content-type' => 'text/html',
            'Content-Disposition' => 'attatchement;Filename=mydoc.doc'
        );
        $data = $request;
        return \Response::make(view('wakil.pdf', ['data' => $data]), 200, $header);
    }
}
