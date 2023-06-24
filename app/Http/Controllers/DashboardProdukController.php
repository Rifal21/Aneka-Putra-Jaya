<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.produk.index',[
            
            'produk' => Produk::latest()->filter(request(['search', 'category' , 'outlet']))->Paginate(15)->withQueryString(),
            'title_dashboard' => 'Semua Produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produk.create' , [
            'categories' => Category::all(),
            'outlet' => Outlet::all(),
            'title_dashboard' => 'Tambah Produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'slug' => 'required|unique:produks',
            'category_id' => 'required',
            'outlet_id' => 'required',
            'gambar' => 'image|file',
            'harga' => 'required|max:125',
            'deskripsi' => 'required'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-produk'); 
        }
        // $validatedData['user_id'] = auth()->user()->id;

        Produk::create($validatedData);

        return redirect('/dashboard/produk')->with('success' , 'Produk baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('dashboard.produk.detail', [
            'produk_satuan' => $produk,
            'title_dashboard' => 'Dashboard Detail Produk'
        ]);
        // return $produk;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.produk.edit', [
            'categories' => Category::all(),
            'produk' => $produk,
            'outlet' => Outlet::all(),
            'title_dashboard' => 'Update Produk'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $rules = [
            'nama_produk' => 'required|max:255',
            'category_id' => 'required',
            'gambar' => 'image|file',
            'harga' => 'required|max:125',
            'deskripsi' => 'required'
        ];


        if($request->slug != $produk->slug) {
            $rules['slug'] = 'required|unique:produks';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->gambarlama) {
                Storage::delete($request->gambarlama);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-produk'); 
        }

        // $validatedData['user_id'] = auth()->user()->id;

        Produk::where('id', $produk->id)->update($validatedData);

        return redirect('/dashboard/produk')->with('success' , 'Produk baru berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if($produk->gambar) {
            Storage::delete($produk->gambar);
        }
        Produk::destroy($produk->id);
        return redirect('/dashboard/produk')->with('success' , 'Produk baru berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Produk::class , 'slug' , $request->nama_produk);

        return response()->json(['slug' => $slug]);
    }
}
