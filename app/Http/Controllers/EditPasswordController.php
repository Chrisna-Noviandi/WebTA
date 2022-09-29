<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EditPasswordController extends Controller
{
    public function show()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.editpassword');
        } else {
            return redirect()->intended('/home');
        }
    }


    public function show1()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.editpassword');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function show2()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.editpassword');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function show3()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.editpassword');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function edit(Request $request)
    {

        $data = $request->validate([
            'old_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:new_password_confirmation',
            'new_password_confirmation' => 'min:6'

        ]);

        if (!Hash::check($request->old_password, auth()->user()->getAuthPassword())) {
            return back()->with("error", "Old Password Doesn't Match!");
        }

        $data['new_password'] = Hash::make($data['new_password']);

        $id = User::find(auth()->user()->id);

        User::where('id', $id['id'])
            ->update(['password' => $data['new_password']]);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
