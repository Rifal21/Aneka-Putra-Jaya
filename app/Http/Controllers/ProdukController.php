<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Outlet;

class ProdukController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug' , request('category'));
            $title = ' di ' . $category->name;
        }
        return view('produk' ,[
            "title" => "Semua Produk" . $title,
            'produk' => Produk::latest()->filter(request(['search', 'category']))->Paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'outlet' => Outlet::all()
        ]);
    }

    public function show(Produk $produk)
    {
        return view('produkdet', [
            'title' => 'Produk detail',
            'produkdet' => $produk,
            'outlet' => Outlet::all()
            
        ]);
        
    }
}
