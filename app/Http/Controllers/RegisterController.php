<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'type' => ['required', Rule::notIn(['Choose...'])]
        ]);
        $data['password'] = Hash::make($data['password']);
        $data += array('status' => 'new');
        User::create($data);



        return redirect('/usermanagement')->with('success', 'Registration successfull !!!');
    }
}
