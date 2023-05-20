<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'categories' => Category::all(),
            'title_dashboard' => 'Kategori Produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create' , [
            'categories' => Category::all(),
            'title_dashboard' => 'Buat Kategori Produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
            'sample' => 'image|file'
        ]);

        if($request->file('sample')){
            $validatedData['sample'] = $request->file('sample')->store('sample-produk'); 
        }
        
        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Kategori baru telah ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category,
            'title_dashboard' => 'Update Kategori Produk'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if($request->file('sample')){
            if($request->samplelama) {
                Storage::delete($request->samplelama);
            }
            $validatedData['sample'] = $request->file('sample')->store('sample-produk'); 
        }

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Kategori telah di update!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category , Produk $produk)
    {   
        if($category->sample) {
            Storage::delete($category->sample);
        }
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Kategori telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class , 'slug' , $request->name);

        return response()->json(['slug' => $slug]);
    }
}
