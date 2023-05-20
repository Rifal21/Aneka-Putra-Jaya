<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Outlet;
use App\Models\Produk;
use Illuminate\Http\Request;
use \App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index' , [
            'title_dashboard' => 'Dashboard',
            'user' => User::all(),
            'kategori' => Category::all(),
            'outlet' => Outlet::all(),
            'produk' => Produk::all(),
            

        ]);
    }
}
