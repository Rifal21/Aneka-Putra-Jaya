<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use \App\Models\Outlet;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index' ,[
            'title' => "Aneka Login",
            'gambar' => 'anekalogo.png',
            'outlets' => Outlet::all()
        ]);
            
    }

    public function authenticate(Request $request): RedirectResponse
    {  
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError' , 'Login gagal !! silahkan masukan data dengan benar!');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
