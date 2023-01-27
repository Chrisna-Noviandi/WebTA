<?php

namespace App\Http\Controllers;

use App\Models\filePengajuan;
use App\Models\User;
use App\Models\pengajuan;
use App\Models\penilaian;
use App\Models\led;
use Faker\Core\File;
use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Drive;


class WakilProdiController extends Controller
{

    public function home()
    {

        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.home');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function daftar()
    {

        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.pengajuan', ["data" => pengajuan::where('id_user', [auth()->user()->id])->latest()->paginate(3)]);
        } else {
            return redirect()->intended('/home');
        }
    }
    public function tambah()
    {

        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.tambah-pengajuan', ["asesor" => User::whereIn('type', ['Acesor'])->get()]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detail($id)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.detail', [
                "pengajuan" => pengajuan::find($id),
                "file_ded" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'ded')->get(),
                "file_dkps" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'dkps')->get(),
                "lampiran" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'lampiran')->get()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detailNilai($id_pengajuan, $id_acesor)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.lihat-nilai', ["data" => penilaian::where('id_pengajuan', $id_pengajuan)->where('id_acesor', $id_acesor)->get()]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detailPerolehanNilai($id)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {

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

            $NA = $a1 + $b1 + $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8 + $c9 + $d1;

            return view('wakil.perolehan-nilai', [
                "d" => penilaian::find($id),
                "NA" => $NA
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function download($id)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            $lokasi = filePengajuan::find($id);

            $path = public_path('storage/' . $lokasi['lokasi']);
            return response()->download($path, $lokasi['nama_asli_file']);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function downloadDKPS()
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {

            $path = public_path('storage/file/Sheet Pengusul APS 4_0 20200131.xlsx');
            return response()->download($path, 'Sheet Pengusul APS 4_0 20200131.xlsx');
        } else {
            return redirect()->intended('/home');
        }
    }

    //redirect ke url login google

    public function gdrive($id)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            session(['id_pengajuan' => $id]);
            $client = new \Google\Client();
            $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
            $client->setClientSecret('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');
            $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
            $client->setScopes([
                'https://www.googleapis.com/auth/drive.file',
                'https://www.googleapis.com/auth/drive.resource',
                'https://www.googleapis.com/auth/drive',
            ]);
            $url = $client->createAuthUrl();
            return redirect($url);
        } else {
            return redirect()->intended('/home');
        }
    }

    //get access token untuk user

    public function getAccessToken(Request $request)
    {
        $id_pengajuan = session('id_pengajuan');
        $client = new \Google\Client();
        $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
        $code = request('code');
        $access_token = $client->fetchAccessTokenWithAuthCode($code);
        $token =  $access_token['access_token'];
        User::where('id', auth()->user()->id)
            ->update(['access_token' => $token]);
        return redirect()->intended('/pengajuan/detail/upload-dkps/' . $id_pengajuan);
    }

    public function gdrive2()
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            $client = new \Google\Client();
            $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
            $client->setClientSecret('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');
            $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
            $client->setScopes([
                'https://www.googleapis.com/auth/drive.file',
                'https://www.googleapis.com/auth/drive.resource',
                'https://www.googleapis.com/auth/drive',
            ]);
            $url = $client->createAuthUrl();
            return redirect($url);
        } else {
            return redirect()->intended('/home');
        }
    }

    //get access token untuk user

    public function getAccessToken2()
    {
        $client = new \Google\Client();
        $client->setClientId('879468625806-miipfn3ppekunoqhltcufl3610cnj08e.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://127.0.0.1:8000/google-drive/callback');
        $code = request('code');
        $access_token = $client->fetchAccessTokenWithAuthCode($code);
        $token =  $access_token['access_token'];
        User::where('id', auth()->user()->id)
            ->update(['access_token' => $token]);
        return redirect()->intended('/pengajuan/tambah-pengajuan');
    }


    public function buatPengajuan(Request $request)
    {

        $data = $request->validate([
            'program' => 'required|min:3|max:255',
            'nama_program_studi' => 'required|min:3|max:255',
            'alamat' => 'required|min:3|max:255',
            'kota' => 'required|min:3|max:255',
            'nama_unit_pengelolah' => 'required|min:3|max:255',
            'nama_perguruan_tinggi' => 'required|min:3|max:255',
            'no_telepon_pt' => 'required|min:3|max:255',
            'alamat_email_pt' => 'required|min:3|max:255',
            'alamat_website_pt' => 'required|min:3|max:255',
            'ts' => 'required|min:3|max:255',
            'nama_narahubung' => 'required|min:3|max:255',
            'telepon_seluler' => 'required|min:3|max:255',
        ]);

        $data += ['id_user' => auth()->user()->id];
        $data += ['status' => 'belum'];
        $id_pengajuan = pengajuan::create($data);
        $id_led = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 40);;

        led::create([
            'id_pengajuan' => $id_pengajuan->id,
            'id_led' => $id_led,
        ]);


        return redirect()->intended('/pengajuan');
    }


    public function ajukan(Request $request, $id)
    {
        pengajuan::where('id', $id)
            ->update(['status' => 'pengajuan']);
        return redirect()->intended('/pengajuan');
    }
    public function detailEdit($id)
    {
        return view('wakil.edit-detail', ["data" => pengajuan::find($id)]);
    }
    public function detailEditSave(Request $request, $id)
    {

        $data = $request->validate([
            'program' => 'required|min:3|max:255',
            'nama_program_studi' => 'required|min:3|max:255',
            'alamat' => 'required|min:3|max:255',
            'kota' => 'required|min:3|max:255',
            'nama_unit_pengelolah' => 'required|min:3|max:255',
            'nama_perguruan_tinggi' => 'required|min:3|max:255',
            'no_telepon_pt' => 'required|min:3|max:255',
            'alamat_email_pt' => 'required|min:3|max:255',
            'alamat_website_pt' => 'required|min:3|max:255',
            'ts' => 'required|min:3|max:255',
            'nama_narahubung' => 'required|min:3|max:255',
            'telepon_seluler' => 'required|min:3|max:255',
        ]);


        pengajuan::where('id', $id)
            ->update($data);


        return redirect()->intended('/pengajuan/detail/' . $id);
    }

    public function uploadDED($id)
    {
        return view('wakil.upload.upload-ded', ["data" => pengajuan::find($id)]);
    }
    public function uploadDEDSave(Request $request, $id)
    {
        // dd($request);
        $data = $request->validate([
            'file_ded' => 'required|mimes:pdf,doc,docx,html',
        ]);


        filePengajuan::where('id_pengajuan', $id)->where('tipe', 'ded')->delete();

        $file_ded = $request['file_ded'];

        filePengajuan::create([
            'id_pengajuan' => $id,
            'nama_file' => $file_ded->store('ded'),
            'size' => $file_ded->getSize(),
            'nama_asli_file' => $file_ded->getClientOriginalName(),
            'lokasi' => $file_ded->store('ded'),
            'tipe' => "ded",
        ]);

        return redirect()->intended('/pengajuan/detail/' . $id);
    }

    public function uploadDKPS($id)
    {
        return view('wakil.upload.upload-dkps', ["data" => pengajuan::find($id)]);
    }
    public function uploadDKPSSave(Request $request, $id)
    {
        $request->session()->forget('id_pengajuan');
        $client = new \Google\Client();
        $access_token = auth()->user()->access_token;
        $client->setAccessToken($access_token);
        $service = new \Google\Service\Drive($client);

        $data = $request->validate([
            'file_dkps' => 'required|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);


        filePengajuan::where('id_pengajuan', $id)->where('tipe', 'dkps')->delete();

        $file_dkps = $request['file_dkps'];

        //upload google drive
        $namefile = new \Google\Service\Drive\DriveFile(array('name' => $file_dkps->getClientOriginalName()));
        $result = $service->files->create($namefile, array(

            'data' => file_get_contents(public_path('storage/' . $file_dkps->store('dkps'))), // ADD YOUR FILE PATH WHICH YOU WANT TO UPLOAD ON GOOGLE DRIVE
            'mimeType' => 'application/octet-stream',
            'uploadType' => 'media'
        ));
        $url = $result->id;



        filePengajuan::create([
            'id_pengajuan' => $id,
            'nama_file' => $url,
            'size' => $file_dkps->getSize(),
            'nama_asli_file' => $file_dkps->getClientOriginalName(),
            'lokasi' => $file_dkps->store('dkps'),
            'tipe' => "dkps",
        ]);

        return redirect()->intended('/pengajuan/detail/' . $id);
    }

    public function uploadLampiran($id)
    {
        return view('wakil.upload.upload-lampiran', ["data" => pengajuan::find($id)]);
    }
    public function uploadLampiranSave(Request $request, $id)
    {
        $data = $request->validate([
            'lampiran' => 'required',
        ]);


        filePengajuan::where('id_pengajuan', $id)->where('tipe', 'lampiran')->delete();

        $lampiran = $request['lampiran'];
        foreach ($lampiran as $file) {

            filePengajuan::create([
                'id_pengajuan' => $id,
                'nama_file' => $file->store('lampiran'),
                'size' => $file->getSize(),
                'nama_asli_file' => $file->getClientOriginalName(),
                'lokasi' => $file->store('lampiran'),
                'tipe' => "lampiran",
            ]);
        }

        return redirect()->intended('/pengajuan/detail/' . $id);
    }

    public function coba(Request $request)
    {
        return view('wakil.drive');
    }
}
