<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardOutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.outlet.index' , [
            'outlet' => Outlet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.outlet.create' , [
            'outlet' => Outlet::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_outlet' => 'required|max:255',
            'slug' => 'required|unique:outlets'
        ]);

        Outlet::create($validatedData);

        return redirect('/dashboard/outlet')->with('success', 'Outlet baru telah ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outlet $outlet)
    {
        return view('dashboard.outlet.edit', [
            'outlet' => $outlet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outlet $outlet)
    {
        $rules = [
            'name_outlet' => 'required|max:255',
            'slug' => 'required|unique:outlets'
        ];

        if ($request->slug != $outlet->slug) {
            $rules['slug'] = 'required|unique:outlets';
        }

        $validatedData = $request->validate($rules);

        Outlet::where('id', $outlet->id)->update($validatedData);

        return redirect('/dashboard/outlet')->with('success', 'Outlet telah di update!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outlet $outlet)
    {
        Outlet::destroy($outlet->id);
        return redirect('/dashboard/outlet')->with('success', 'Oultet has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Outlet::class , 'slug' , $request->name_outlet);

        return response()->json(['slug' => $slug]);
    }
}
