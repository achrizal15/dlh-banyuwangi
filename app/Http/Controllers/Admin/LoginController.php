<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.registrasi.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect(route("dashboard.index"));
        }
        return redirect('/login')->with('errors', 'Email atau Password Anda Salah!!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

   
}
