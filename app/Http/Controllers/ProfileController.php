<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Admin") {
            return view('admin.profile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }


    public function editprofile(Request $request)
    {
        $data = auth()->user()->type;
        $id = auth()->user()->id;
        if ($data == "Admin") {
            return view('admin.editprofile', [
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

        return redirect('/profile')->with('success', 'User Has Been Update !!!');
    }

    public function show1()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Acesor") {
            return view('asesor.profile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }


    public function editprofile1(Request $request)
    {
        $data = auth()->user()->type;
        $id = auth()->user()->id;
        if ($data == "Acesor") {
            return view('asesor.editprofile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function update1(Request $request)
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

        return redirect('/profile1')->with('success', 'User Has Been Update !!!');
    }


    public function show2()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Pemimpin") {
            return view('pemimpin.profile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }


    public function editprofile2(Request $request)
    {
        $data = auth()->user()->type;
        $id = auth()->user()->id;
        if ($data == "Pemimpin") {
            return view('pemimpin.editprofile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function update2(Request $request)
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

        return redirect('/profile2')->with('success', 'User Has Been Update !!!');
    }


    public function show3()
    {

        $id = User::find(auth()->user()->id);
        $data = auth()->user()->type;
        if ($data == "Wakil Prodi") {
            return view('wakil.profile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }


    public function editprofile3(Request $request)
    {
        $data = auth()->user()->type;
        $id = auth()->user()->id;
        if ($data == "Wakil Prodi") {
            return view('wakil.editprofile', [
                "user" => User::find($id)
            ]);
        } else {
            return redirect()->intended('/home');
        }
    }

    public function update3(Request $request)
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

        return redirect('/profile3')->with('success', 'User Has Been Update !!!');
    }
}
