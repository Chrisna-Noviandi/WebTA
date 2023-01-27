<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pengajuan;
use App\Models\filePengajuan;
use App\Models\penilaian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {

        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.home');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function user_management()
    {

        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.usermanagement', [
                "user" => User::first()->filter(request(['search']))->paginate(10)->withQueryString()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.edit', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function update(Request $request)
    {

        $user = User::find($request->id);



        $rule = [
            'name' => 'required|min:3|max:255',
        ];

        if ($request->username != $user->username) {
            $rule['username'] = 'required|min:3|max:255|unique:users';
        }

        $validatedata = $request->validate($rule);

        User::where('id', $user['id'])
            ->update($validatedata);

        return redirect('/usermanagement')->with('success', 'User Has Been Update !!!');
    }

    public function resetPassword(Request $request)
    {

        $user = User::find($request->id);



        $rule = [
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ];


        $validatedata = $request->validate($rule);
        $validatedata['password'] = Hash::make($validatedata['password']);
        unset($validatedata['password_confirmation']);

        User::where('id', $user['id'])
            ->update($validatedata);

        return redirect('/usermanagement')->with('success', 'User Has Been Update !!!');
    }

    public function delete(Request $request, $id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            $flight = User::find($id);

            $flight->delete();

            return redirect('/usermanagement')->with('success', 'User Has Been Delete !!!');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function pengajuan()
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.pengajuan', ["data" => pengajuan::where('status', 'pengajuan')->orWhere('status', 'penilaian')->latest()->paginate(3)]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function detail($id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.detail', [
                "pengajuan" => pengajuan::find($id),
                "file_ded" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'ded')->get(),
                "file_dkps" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'dkps')->get(),
                "lampiran" => filePengajuan::where('id_pengajuan', $id)->where('tipe', 'lampiran')->get()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function tolak($id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.tolak', ['id' => $id]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function tolakSave(Request $request, $id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            pengajuan::where('id', $id)->update(['tolak' => $request['tolak']]);
            pengajuan::where('id', $id)->update(['status' => 'tolak']);
            return redirect()->intended('/pengajuan-admin');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function terima($id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.terima', [
                'id' => $id,
                "asesor" => User::whereIn('type', ['Acesor'])->get()
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function terimaSave(Request $request, $id)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            $datas = $request->validate([
                'id_acesor1' => 'required',
                'id_acesor2' => 'required|different:id_acesor1',
            ]);

            pengajuan::where('id', $id)->update($datas);
            pengajuan::where('id', $id)->update(['status' => 'penilaian']);

            $asesor1 = ['id_pengajuan' => $id];
            $asesor1 += ['id_acesor' => $request->id_acesor1];

            penilaian::create($asesor1);

            $asesor2 = ['id_pengajuan' => $id];
            $asesor2 += ['id_acesor' => $request->id_acesor2];

            penilaian::create($asesor2);
            return redirect()->intended('/pengajuan-admin');
        } else {
            return redirect()->intended('/home');
        }
    }
    public function nilai($id_pengajuan, $id_acesor)
    {
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.detail-penilaian', ["data" => penilaian::where('id_pengajuan', $id_pengajuan)->where('id_acesor', $id_acesor)->get()]);
        } else {
            return redirect()->intended('/home');
        }
    }
}
