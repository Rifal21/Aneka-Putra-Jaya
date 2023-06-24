<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Outlet;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug' , request('category'));
            $title = ' di ' . $category->name;
        }
        if(request('outlet')) {
            $outlet = Outlet::firstWhere('slug' , request('outlet'));
            $title = ' di ' . $outlet->name_outlet;
        }
        return view('produk' ,[
            "title" => "Semua Produk" . $title,
            'produk' => Produk::latest()->filter(request(['search', 'category' , 'outlet']))->Paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'outlets' => Outlet::all()
        ]);
    }

    public function show(Produk $produk )
    {
        return view('produkdet', [
            'title' => 'Produk detail',
            'produkdet' => $produk,
            'outlets' => Outlet::all()       
        ]);        
    }
}
