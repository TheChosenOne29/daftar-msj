<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required|min:3'
        ]);

        if(Auth::attempt($credentials)){            
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('login-error', 'Credentials not found');
    }

    public function logOut()
    {
        Auth::logout();
        session()->flush();

        return redirect('/');
    }
}
