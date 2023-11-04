<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('dashboard');
        } else {
            return redirect('/')->with('error', 'Email atau Password Salah');
        }
    }

    public function logout()
    {
        if (Auth::guard('employee')->check()) {
            Auth::guard('employee')->logout();
            return redirect('/');
        }
    }
}
