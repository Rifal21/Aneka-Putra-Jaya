<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;

class OutletController extends Controller
{
    public function show(Outlet $outlet){
        
        return view('outletdet' , [
            'title' => 'Detail Outlet ' . $outlet->name_outlet,
            'outletdet' => $outlet,
            'outlets' => $outlet->all()
        ]);
    }
}
