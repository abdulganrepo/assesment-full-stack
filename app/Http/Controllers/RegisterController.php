<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $data['password'] = Hash::make($data['password']);
        User::insert($data);

        $request->session()->flash('success', 'Registrasi Berhasil !! Silakan Login !!');
        return view('login.index');
    }
}
