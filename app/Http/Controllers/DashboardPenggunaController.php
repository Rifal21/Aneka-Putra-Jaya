<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class DashboardPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengguna.index',[
            'users' => User::join('role_users' , 'users.role_id', '=' ,'role_users.id' )->get(),
            'title_dashboard' => 'Human Resource'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengguna.create' , [
            'role'=> RoleUser::all(),
            'title_dashboard' => 'Tambah Pengguna'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required' , 'max:125' ],
            'username' => ['required' ,'min:3', 'max:125' , 'unique:users'],
            'role_id' => 'required',
            'email' => 'required|email:dns|unique:users',
            'foto' => 'image|file',
            'alamat' => 'required|max:125',
            'no_hp' => 'required|max:13',
            'password' => 'required|min:5|max:125'
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('foto'); 
        }
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        return redirect('/dashboard/pengguna')->with('success' , 'Pendaftaran akun telah ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
        return view('dashboard.pengguna.detail', [
            'user' => $user,
            'users' => User::join('role_users' , 'users.role_id', '=' ,'role_users.id' )->get(),
            'title_dashboard' => 'Detail Pengguna'
        ]);
        // return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.pengguna.edit' , [
            'user' => $user,
            'role' => RoleUser::all(),
            'title_dashboard' => 'Ubah Detail Pengguna'
        //    'user' => $user->join('role_users' , 'users.role_id', '=' ,'role_users.id' )->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required' , 'max:125' ],
            'role_id' => 'required',
            'foto' => 'image|file',
            'password' => 'required|min:5|max:125',
            'alamat' => 'required|max:125',
            'no_hp' => 'required|max:13',
        ];


        if($request->username != $user->username && $request->email != $user->email) {
            $rules['username'] = 'required|unique:users';
            $rules['email'] = 'required|email:dns|unique:users';
        }

        // if ($request->email != $user->email){
        //     $rules['email'] = 'required|email:dns|unique:users';
        // }

        $validatedData = $request->validate($rules);   

        if($request->file('foto')){
            if($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto'); 
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard/pengguna')->with('success' , 'Pengguna berhasil diupdate!');

    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->foto) {
            Storage::delete($user->foto);
        }

        User::destroy($user->id);

        return redirect('/dashboard/pengguna')->with('success' , 'Pengguna berhasil dihapus!');

        // return $user;
    }
}
