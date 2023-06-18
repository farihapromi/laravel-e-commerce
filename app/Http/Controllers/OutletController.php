<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        $outlets= Outlet::orderBy('id', 'desc')->paginate(10);
        return view('backend.outlet.index', compact('outlets'));
    }
    public function create(){
        return view('backend.outlet.create');
    }
    public function show(string $id)
    {
        $outlet = Outlet::findOrFail($id);

        return view('backend.outlet.show', compact('outlet'));
    }

    public function store(Request $request)
    {


        $outlet = new Outlet();
        $outlet->name = $request->name;
        $outlet->distance = $request->distance;
        $outlet->district = $request->district;
        $outlet->status = $request->status;
        $outlet->save();

        return redirect()->route('outlet.index');
    }
   


}
