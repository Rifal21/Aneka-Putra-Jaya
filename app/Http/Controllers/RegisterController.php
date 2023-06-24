<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi.index', [
            'title' => "Registrasi Akun",
            'gambar' => 'al fazza.png',
            'outlets' => Outlet::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required' , 'max:125' ],
            'alamat' => 'max:255',
            'foto' => 'image|file',
            'username' => ['required' ,'min:3', 'max:125' , 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:125',
            'no_hp' => 'required|max:13'
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('foto'); 
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success' , 'Pendaftaran akun telah berhasil !! Silahkan Login');
    }
}
