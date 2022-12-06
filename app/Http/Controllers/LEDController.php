<?php

namespace App\Http\Controllers;

use App\Models\led;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


class LEDController extends Controller
{
    public function index($id)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.led', [
                "led" => led::where('id_pengajuan', $id)->get(),
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }
    public function save(Request $request, $id_pengajuan)
    {

        led::where('id', $id_pengajuan)
            ->update([
                'a1' => $request['a1'],
                'b1' => $request['b1'],
                'b2' => $request['b2'],
                'b3' => $request['b3'],
                'b4' => $request['b4'],
                'b5' => $request['b5'],
                'b6' => $request['b6'],
                'b7' => $request['b7'],
                'b8' => $request['b8'],
                'c1' => $request['c1'],
                'c2' => $request['c2'],
                'c3' => $request['c3'],
                'c4' => $request['c4'],
                'c5' => $request['c5'],
                'c6' => $request['c6'],
                'c7' => $request['c7'],
                'c8' => $request['c8'],
                'c9' => $request['c9'],
                'd1' => $request['d1'],
                'd2' => $request['d2'],
                'd3' => $request['d3'],
                'd4' => $request['d4'],
                'e1' => $request['e1'],

            ]);

        return redirect()->intended('/pengajuan/detail/' . $id_pengajuan);
    }

    public function download(Request $request, $id)
    {

        // view()->share('data', $data);
        // $pdf = PDF::loadView('wakil.pdf');
        // return $pdf->download('pdf_file.pdf');

        $header = array(
            'Content-type' => 'text/html',
            'Content-Disposition' => 'attatchement;Filename=Laporan-Evluasi-Diri.doc'
        );
        $data = $request;
        return \Response::make(view('wakil.pdf', ['led' => led::where('id_pengajuan', $id)->get()]), 200, $header);
    }

    public function share($id)
    {
        return view('umum.led', [
            "led" => led::where('id_led', $id)->get(),
        ]);
    }
    public function saveShare(Request $request, $id_led)
    {

        led::where('id_led', $id_led)
            ->update([
                'a1' => $request['a1'],
                'b1' => $request['b1'],
                'b2' => $request['b2'],
                'b3' => $request['b3'],
                'b4' => $request['b4'],
                'b5' => $request['b5'],
                'b6' => $request['b6'],
                'b7' => $request['b7'],
                'b8' => $request['b8'],
                'c1' => $request['c1'],
                'c2' => $request['c2'],
                'c3' => $request['c3'],
                'c4' => $request['c4'],
                'c5' => $request['c5'],
                'c6' => $request['c6'],
                'c7' => $request['c7'],
                'c8' => $request['c8'],
                'c9' => $request['c9'],
                'd1' => $request['d1'],
                'd2' => $request['d2'],
                'd3' => $request['d3'],
                'd4' => $request['d4'],
                'e1' => $request['e1'],

            ]);

        return redirect()->back();
    }
}
