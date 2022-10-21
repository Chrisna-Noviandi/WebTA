<?php

namespace App\Http\Controllers;

use App\Models\filePengajuan;
use App\Models\User;
use App\Models\pengajuan;
use App\Models\penilaian;
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

    public function detailNilai($id_pengajuan)
    {
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.lihat-nilai', ["data" => penilaian::where('id_pengajuan', $id_pengajuan)->get()]);
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

    //redirect ke url login google

    public function gdrive()
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

    public function getAccessToken()
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





    public function ajukan(Request $request)
    {
        $client = new \Google\Client();
        $access_token = auth()->user()->access_token;
        $client->setAccessToken($access_token);
        $service = new \Google\Service\Drive($client);





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
            'id_acesor' => 'required',
            'file_ded' => 'required|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);





        $data += array('id_user' => auth()->user()->id);
        $data += array('status' => 'belum');
        $uploade = pengajuan::create($data);

        $id_pengaju = $uploade->id;
        $file_ded = $request['file_ded'];
        //upload google drive
        $namefile = new \Google\Service\Drive\DriveFile(array('name' => $file_ded->getClientOriginalName()));
        $result = $service->files->create($namefile, array(

            'data' => file_get_contents(public_path('storage/' . $file_ded->store('ded'))), // ADD YOUR FILE PATH WHICH YOU WANT TO UPLOAD ON GOOGLE DRIVE
            'mimeType' => 'application/octet-stream',
            'uploadType' => 'media'
        ));
        $url = $result->id;



        filePengajuan::create([
            'id_pengajuan' => $id_pengaju,
            'nama_file' => $url,
            'size' => $file_ded->getSize(),
            'nama_asli_file' => $file_ded->getClientOriginalName(),
            'lokasi' => $file_ded->store('ded'),
            'tipe' => "ded",
        ]);


        $file_dkps = $request['file_dkps'];

        foreach ($file_dkps as $file) {


            filePengajuan::create([
                'id_pengajuan' => $id_pengaju,
                'nama_file' => $file->store('dkps'),
                'size' => $file->getSize(),
                'nama_asli_file' => $file->getClientOriginalName(),
                'lokasi' => $file->store('dkps'),
                'tipe' => "dkps",
            ]);
        }

        $lampiran = $request['lampiran'];
        foreach ($lampiran as $file) {


            filePengajuan::create([
                'id_pengajuan' => $id_pengaju,
                'nama_file' => $file->store('lampiran'),
                'size' => $file->getSize(),
                'nama_asli_file' => $file->getClientOriginalName(),
                'lokasi' => $file->store('lampiran'),
                'tipe' => "lampiran",
            ]);
        }
        return redirect()->intended('/pengajuan');
    }
    public function coba(Request $request)
    {
        return view('wakil.drive');
    }
    public function uploadDrive(Request $request)
    {
    }
}
