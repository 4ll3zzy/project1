<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard')->with('loginsucces','Login Berhasil');}
        return redirect('/login')->with('loginerror','Login Error');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logoutsucces','logout succes');
    }
}
