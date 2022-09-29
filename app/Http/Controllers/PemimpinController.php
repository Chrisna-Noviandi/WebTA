<?php

namespace App\Http\Controllers;

use App\Models\filePengajuan;
use App\Models\pengajuan;
use App\Models\penilaian;
use Illuminate\Http\Request;

class PemimpinController extends Controller
{
    public function home()
    {

        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.home');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function daftar()
    {

        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.pengajuan', ["data" => pengajuan::latest()->paginate(3)]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detail($id)
    {
        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.detail', [
                "pengajuan" => pengajuan::find($id),
                "file_ded" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'ded')->get(),
                "file_dkps" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'dkps')->get(),
                "lampiran" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'lampiran')->get()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }
    public function download($id)
    {
        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            $lokasi = filePengajuan::find($id);

            $path = public_path('storage/' . $lokasi['lokasi']);
            return response()->download($path, $lokasi['nama_asli_file']);
        } else {
            return redirect()->intended('/home');
        }
    }
    public function detailNilai($id_pengajuan)
    {
        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.lihat-nilai', ["data" => penilaian::where('id_pengajuan', $id_pengajuan)->get()]);
        } else {
            return redirect()->intended('/home');
        }
    }
}
