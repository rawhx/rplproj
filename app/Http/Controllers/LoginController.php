<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('loginadmin');
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (Auth()->attempt($login)) {
            return redirect('/admin');
        } else {
            return back()->withErrors(['email'=>'gagal'])->onlyInput('email');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
