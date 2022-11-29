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
            return view('asesor.pengajuan', ["data" => pengajuan::where('id_acesor1', [auth()->user()->id])->orWhere('id_acesor2', [auth()->user()->id])->latest()->paginate(3)]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function formPenilaian($id_pengajuan)
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.multiform', [
                "penilaian" => penilaian::where('id_pengajuan', $id_pengajuan)->where('id_acesor', auth()->user()->id)->get(),
                "file_ded" => filePengajuan::where('id_pengajuan', $id_pengajuan)->where('tipe', 'ded')->get(),
                "file_dkps" => filePengajuan::where('id_pengajuan', $id_pengajuan)->where('tipe', 'dkps')->get()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detailPenilaian($id, $id_acesor)
    {
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.detail-penilaian', ["data" => penilaian::where('id_pengajuan', $id)->where('id_acesor', $id_acesor)->get()]);
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
    public function multi(Request $request)
    {
        return view('asesor.multiform', ["penilaian" => penilaian::find(1)]);
    }

    public function multip(Request $request)
    {
        dd($request);

        // $koontol = Asesor::create($data);

        // $data_redirect['id_row'] = $koontol->id;

        // return view('multiform', $data_redirect);
    }

    public function autosave1(Request $request)
    {
        json_encode(
            penilaian::where('id_pengajuan', $request['id'])
                ->where('id_acesor', auth()->user()->id)
                ->update([
                    'f1' => $request['f1'],
                    'n1' => $request['n1']
                ])
        );

        $pengajuan = pengajuan::find($request['id']);

        if ($pengajuan['id_acesor1'] == auth()->user()->id) {
            json_encode(
                pengajuan::where('id', $request['id'])
                    ->update([
                        'status_acesor1' => "hampir"
                    ])
            );
        } else {
            json_encode(
                pengajuan::where('id', $request['id'])
                    ->update([
                        'status_acesor2' => "hampir"
                    ])
            );
        }
    }
    public function autosave2(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f2' => $request['f2'],
                'n2' => $request['n2']
            ]));
    }
    public function autosave3(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f3' => $request['f3'],
                'n3' => $request['n3'],
                'f4' => $request['f4'],
                'n4' => $request['n4'],
                'f5' => $request['f5'],
                'n5' => $request['n5']
            ]));
    }
    public function autosave4(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f6' => $request['f6'],
                'n6' => $request['n6'],
                'f7' => $request['f7'],
                'n7' => $request['n7'],
                'f8' => $request['f8'],
                'n8' => $request['n8'],
                'f9' => $request['f9'],
                'n9' => $request['n9'],
                'f10' => $request['f10'],
                'n10' => $request['n10'],
                'f11' => $request['f11'],
                'n11' => $request['n11'],
                'f12' => $request['f12'],
                'n12' => $request['n12'],
                'f13' => $request['f13'],
                'n13' => $request['n13']
            ]));
    }
    public function autosave5(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f14' => $request['f14'],
                'n14' => $request['n14'],
                'f15' => $request['f15'],
                'n15' => $request['n15'],
                'f16' => $request['f16'],
                'n16' => $request['n16']
            ]));
    }
    public function autosave6(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f17' => $request['f17'],
                'n17' => $request['n17'],
                'f18' => $request['f18'],
                'n18' => $request['n18'],
                'f19' => $request['f19'],
                'n19' => $request['n19'],
                'f20' => $request['f20'],
                'n20' => $request['n20'],
                'f21' => $request['f21'],
                'n21' => $request['n21'],
                'f22' => $request['f22'],
                'n22' => $request['n22'],
                'f23' => $request['f23'],
                'n23' => $request['n23'],
                'f24' => $request['f24'],
                'n24' => $request['n24'],
                'f25' => $request['f25'],
                'n25' => $request['n25'],
                'f26' => $request['f26'],
                'n26' => $request['n26'],
                'f27' => $request['f27'],
                'n27' => $request['n27'],
                'f28' => $request['f28'],
                'n28' => $request['n28'],
                'f29' => $request['f29'],
                'n29' => $request['n29'],
                'f30' => $request['f30'],
                'n30' => $request['n30'],
                'f31' => $request['f31'],
                'n31' => $request['n31']
            ]));
    }
    public function autosave7(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f32' => $request['f32'],
                'n32' => $request['n32'],
                'f33' => $request['f33'],
                'n33' => $request['n33'],
                'f34' => $request['f34'],
                'n34' => $request['n34'],
                'f35' => $request['f35'],
                'n35' => $request['n35'],
                'f36' => $request['f36'],
                'n36' => $request['n36'],
                'f37' => $request['f37'],
                'n37' => $request['n37']
            ]));
    }
    public function autosave8(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f38' => $request['f38'],
                'n38' => $request['n38'],
                'f39' => $request['f39'],
                'n39' => $request['n39'],
                'f40' => $request['f40'],
                'n40' => $request['n40'],
                'f41' => $request['f41'],
                'n41' => $request['n41'],
                'f42' => $request['f42'],
                'n42' => $request['n42'],
                'f43' => $request['f43'],
                'n43' => $request['n43'],
                'f44' => $request['f44'],
                'n44' => $request['n44'],
                'f45' => $request['f45'],
                'n45' => $request['n45'],
                'f46' => $request['f46'],
                'n46' => $request['n46'],
                'f47' => $request['f47'],
                'n47' => $request['n47']
            ]));
    }
    public function autosave9(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f48' => $request['f48'],
                'n48' => $request['n48'],
                'f49' => $request['f49'],
                'n49' => $request['n49']
            ]));
    }
    public function autosave10(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f50' => $request['f50'],
                'n50' => $request['n50'],
                'f51' => $request['f51'],
                'n51' => $request['n51']
            ]));
    }
    public function autosave11(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f52' => $request['f52'],
                'n52' => $request['n52'],
                'f53' => $request['f53'],
                'n53' => $request['n53'],
                'f54' => $request['f54'],
                'n54' => $request['n54'],
                'f55' => $request['f55'],
                'n55' => $request['n55'],
                'f56' => $request['f56'],
                'n56' => $request['n56'],
                'f57' => $request['f57'],
                'n57' => $request['n57'],
                'f58' => $request['f58'],
                'n58' => $request['n58'],
                'f59' => $request['f59'],
                'n59' => $request['n59'],
                'f60' => $request['f60'],
                'n60' => $request['n60'],
                'f61' => $request['f61'],
                'n61' => $request['n61'],
                'f62' => $request['f62'],
                'n62' => $request['n62'],
                'f63' => $request['f63'],
                'n63' => $request['n63'],
                'f64' => $request['f64'],
                'n64' => $request['n64'],
                'f65' => $request['f65'],
                'n65' => $request['n65']
            ]));
    }
    public function autosave12(Request $request)
    {
        json_encode(penilaian::where('id_pengajuan', $request['id'])
            ->where('id_acesor', auth()->user()->id)
            ->update([
                'f66' => $request['f66'],
                'n66' => $request['n66'],
                'f67' => $request['f67'],
                'n67' => $request['n67'],
                'f68' => $request['f68'],
                'n68' => $request['n68'],
                'f69' => $request['f69'],
                'n69' => $request['n69']
            ]));
    }



    public function hitung($id)
    {
        $n = penilaian::find($id);


        $a1 = $n["n1"] * 1.0;
        $b1 = $n["n2"] * 1.0;
        $c1 = $n["n3"] * 0.51 + $n["n4"] * 1.05 + $n["n5"] * 1.53;
        $c2 = $n["n6"] * 0.34 + $n["n7"] * 0.34 + $n["n8"] * 0.68 + $n["n9"] * 0.34 + $n["n`10`"] * 0.68 + $n["n11"] * 1.01 + $n["n12"] * 1.36 + $n["n13"] * 1.36;
        $c3 = $n["n14"] * 4.60 + $n["n15"] * 3.07 + $n["n16"] * 1.53;
        $c4 = $n["n17"] * 0.74 + $n["n18"] * 0.99 + $n["n19"] * 0.50 + $n["n20"] * 0.50 + $n["n21"] * 0.99 + $n["n22"] * 0.25 + $n["n23"] * 0.50 + $n["n24"] * 0.81 + $n["n25"] * 0.81 + $n["n26"] * 0.41 + $n["n27"] * 0.81 + $n["n28"] * 0.81 + $n["n29"] * 0.81 + $n["n30"] * 2.23 + $n["n31"] * 1.12;
        $c5 = $n["n32"] * 0.77 + $n["n33"] * 0.77 + $n["n34"] * 0.38 + $n["n35"] * 0.38 + $n["n36"] * 0.77 + $n["n37"] * 3.07;
        $c6 = $n["n38"] * 2.51 + $n["n39"] * 0.84 + $n["n40"] * 1.67 + $n["n41"] * 1.12 + $n["n42"] * 0.56 + $n["n43"] * 2.51 + $n["n44"] * 1.67 + $n["n45"] * 1.67 + $n["n46"] * 2.51 + $n["n47"] * 3.35;
        $c7 = $n["n48"] * 1.53 + $n["n49"] * 3.07;
        $c8 = $n["n50"] * 0.51 + $n["n51"] * 1.02;
        $c9 = $n["n52"] * 1.92 + $n["n53"] * 1.92 + $n["n54"] * 2.88 + $n["n55"] * 0.96 + $n["n56"] * 1.92 + $n["n57"] * 1.92 + $n["n58"] * 1.92 + $n["n59"] * 2.88 + $n["n60"] * 2.88 + $n["n61"] * 1.92 + $n["n62"] * 1.92 + $n["n63"] * 3.83 + $n["n64"] * 2.88 + $n["n65"] * 0.96;
        $d1 = $n["n66"] * 1.50 + $n["n67"] * 2.00 + $n["n68"] * 1.50 + $n["n69"] * 1.00;

        $jumlah = $a1 + $b1 + $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8 + $c9 + $d1;



        if ($n["n12"] >= 2 && $n["n17"] >= 2 && $n["n38"] >= 2) {
            if ($n["n18"] >= 3.5 && $n["n19"] >= 3.5 && $n["n60"] >= 3.5 && $n["n61"] >= 3.5) {
                if ($jumlah >= 361) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Unggul"
                        ]);
                } elseif ($jumlah >= 301 && $jumlah < 361) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik Sekali"
                        ]);
                } elseif ($jumlah >= 200 && $jumlah < 301) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik"
                        ]);
                } else {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Tidak Terakredetasi"
                        ]);
                }
            } elseif ($n["n18"] >= 3 && $n["n19"] >= 3 && $n["n60"] >= 3 && $n["n61"] >= 3) {
                if ($jumlah >= 361) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik Sekali"
                        ]);
                } elseif ($jumlah >= 301 && $jumlah < 361) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik Sekali"
                        ]);
                } elseif ($jumlah >= 200 && $jumlah < 301) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik"
                        ]);
                } else {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Tidak Terakredetasi"
                        ]);
                }
            } else {
                if ($jumlah >= 200) {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Baik"
                        ]);
                } else {
                    penilaian::where('id', $n['id'])
                        ->update([
                            'nilai' => "Tidak Terakredetasi"
                        ]);
                }
            }
        } else {
            penilaian::where('id', $n['id'])
                ->update([
                    'nilai' => "Tidak Terakredetasi"
                ]);
        }
        $pengajuan2 = pengajuan::find($n['id_pengajuan']);
        if ($pengajuan2['id_acesor1'] == auth()->user()->id) {
            pengajuan::where('id', $pengajuan2['id'])
                ->update([
                    'status_acesor1' => "sudah"
                ]);
        } else {
            pengajuan::where('id', $pengajuan2['id'])
                ->update([
                    'status_acesor2' => "sudah"
                ]);
        }


        return redirect()->intended('/daftar-pengajuan-asesor');
    }
}
