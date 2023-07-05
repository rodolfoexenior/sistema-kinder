<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::with('cities.provinces')->get();
        return view('admin.provinces.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        $countries = Country::all();
        return view('admin.provinces.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:provinces",
            'country_id' => "required",
            'city_id' => "required"
        ]);
       
        Province::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id
        ]);
        return redirect()->route('admin.provinces.index')->with('info','La provincia ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        return view('admin.provinces.edit',compact('province'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        $request->validate([
            'name' => "required|unique:provinces,name,$province->id",
        ]);
        $province->update($request->all());
        return redirect()->route('admin.provinces.index')->with('info','Provincia actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
