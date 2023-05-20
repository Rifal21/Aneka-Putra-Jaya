<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\User;
use \App\Models\Outlet;

class BerandaController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'Home',
            'categories' => Category::all(),
            // 'user' => $user->join('role_users' , 'role_users.id' , '=' , 'users.role_id')->where('role_id' , 3)
            'user' => User::all()->where('role_id' , 3),
            'outlets' => Outlet::all()
        ]);
    }
}
