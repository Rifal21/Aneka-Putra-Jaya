<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Outlet;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories',[
            'title' => 'Semua Kategori Produk',
            'outlets' => Outlet::all()
        ]);
    }
}
