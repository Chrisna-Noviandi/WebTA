<?php

namespace App\Http\Controllers;

use App\Models\filePengajuan;
use App\Models\pengajuan;
use App\Models\penilaian;
use Illuminate\Http\Request;

class AsesorController extends Controller
{

    public function home()
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.home');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function daftarPengajuan()
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.pengajuan', ["data" => pengajuan::where('id_acesor', [auth()->user()->id])->latest()->paginate(3)]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function formPenilaian($id_pengajuan)
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.form-penilaian', ["id_pengajuan" => $id_pengajuan]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detailPenilaian($id)
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.detail-penilaian', ["data" => penilaian::where('id_pengajuan', $id)->get()]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detailPengajuan($id)
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.detail-pengajuan', [
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
        if ($data == "Acesor") {
            $lokasi = filePengajuan::find($id);

            $path = public_path('storage/' . $lokasi['lokasi']);
            return response()->download($path, $lokasi['nama_asli_file']);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function nilaiMasuk(Request $request)
    {
        $validatedData = $request->validate([
            'f1' => 'required|min:1|max:255',
            'n1' => 'required',
            'f2' => 'required|min:1|max:255',
            'n2' => 'required',
            'f3' => 'required|min:1|max:255',
            'n3' => 'required',
            'f4' => 'required|min:1|max:255',
            'n4' => 'required',
            'f5' => 'required|min:1|max:255',
            'n5' => 'required',
            'f6' => 'required|min:1|max:255',
            'n6' => 'required',
            'f7' => 'required|min:1|max:255',
            'n7' => 'required',
            'f8' => 'required|min:1|max:255',
            'n8' => 'required',
            'f9' => 'required|min:1|max:255',
            'n9' => 'required',
            'f10' => 'required|min:1|max:255',
            'n10' => 'required',
            'f11' => 'required|min:1|max:255',
            'n11' => 'required',
            'f12' => 'required|min:1|max:255',
            'n12' => 'required',
            'f13' => 'required|min:1|max:255',
            'n13' => 'required',
            'f14' => 'required|min:1|max:255',
            'n14' => 'required',
            'f15' => 'required|min:1|max:255',
            'n15' => 'required',
            'f16' => 'required|min:1|max:255',
            'n16' => 'required',
            'f17' => 'required|min:1|max:255',
            'n17' => 'required',
            'f18' => 'required|min:1|max:255',
            'n18' => 'required',
            'f19' => 'required|min:1|max:255',
            'n19' => 'required',
            'f20' => 'required|min:1|max:255',
            'n20' => 'required',
            'f21' => 'required|min:1|max:255',
            'n21' => 'required',
            'f22' => 'required|min:1|max:255',
            'n22' => 'required',
            'f23' => 'required|min:1|max:255',
            'n23' => 'required',
            'f24' => 'required|min:1|max:255',
            'n24' => 'required',
            'f25' => 'required|min:1|max:255',
            'n25' => 'required',
            'f26' => 'required|min:1|max:255',
            'n26' => 'required',
            'f27' => 'required|min:1|max:255',
            'n27' => 'required',
            'f28' => 'required|min:1|max:255',
            'n28' => 'required',
            'f29' => 'required|min:1|max:255',
            'n29' => 'required',
            'f30' => 'required|min:1|max:255',
            'n30' => 'required',
            'f31' => 'required|min:1|max:255',
            'n31' => 'required',
            'f32' => 'required|min:1|max:255',
            'n32' => 'required',
            'f33' => 'required|min:1|max:255',
            'n33' => 'required',
            'f34' => 'required|min:1|max:255',
            'n34' => 'required',
            'f35' => 'required|min:1|max:255',
            'n35' => 'required',
            'f36' => 'required|min:1|max:255',
            'n36' => 'required',
            'f37' => 'required|min:1|max:255',
            'n37' => 'required',
            'f38' => 'required|min:1|max:255',
            'n38' => 'required',
            'f39' => 'required|min:1|max:255',
            'n39' => 'required',
            'f40' => 'required|min:1|max:255',
            'n40' => 'required',
            'f41' => 'required|min:1|max:255',
            'n41' => 'required',
            'f42' => 'required|min:1|max:255',
            'n42' => 'required',
            'f43' => 'required|min:1|max:255',
            'n43' => 'required',
            'f44' => 'required|min:1|max:255',
            'n44' => 'required',
            'f45' => 'required|min:1|max:255',
            'n45' => 'required',
            'f46' => 'required|min:1|max:255',
            'n46' => 'required',
            'f47' => 'required|min:1|max:255',
            'n47' => 'required',
            'f48' => 'required|min:1|max:255',
            'n48' => 'required',
            'f49' => 'required|min:1|max:255',
            'n49' => 'required',
            'f50' => 'required|min:1|max:255',
            'n50' => 'required',
            'f51' => 'required|min:1|max:255',
            'n51' => 'required',
            'f52' => 'required|min:1|max:255',
            'n52' => 'required',
            'f53' => 'required|min:1|max:255',
            'n53' => 'required',
            'f54' => 'required|min:1|max:255',
            'n54' => 'required',
            'f55' => 'required|min:1|max:255',
            'n55' => 'required',
            'f56' => 'required|min:1|max:255',
            'n56' => 'required',
            'f57' => 'required|min:1|max:255',
            'n57' => 'required',
            'f58' => 'required|min:1|max:255',
            'n58' => 'required',
            'f59' => 'required|min:1|max:255',
            'n59' => 'required',
            'f60' => 'required|min:1|max:255',
            'n60' => 'required',
            'f61' => 'required|min:1|max:255',
            'n61' => 'required',
            'f62' => 'required|min:1|max:255',
            'n62' => 'required',
            'f63' => 'required|min:1|max:255',
            'n63' => 'required',
            'f64' => 'required|min:1|max:255',
            'n64' => 'required',
            'f65' => 'required|min:1|max:255',
            'n65' => 'required',
            'f66' => 'required|min:1|max:255',
            'n66' => 'required',
            'f67' => 'required|min:1|max:255',
            'n67' => 'required',
            'f68' => 'required|min:1|max:255',
            'n68' => 'required',
            'f69' => 'required|min:1|max:255',
            'n69' => 'required',
            'id_pengajuan' => 'required',
            'nilai' => 'required'
        ]);



        pengajuan::where('id', $request['id_pengajuan'])
            ->update(['status' => 'sudah']);
        penilaian::create($validatedData);
        return redirect()->intended('/daftar-pengajuan-asesor');
    }
}
