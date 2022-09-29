<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
