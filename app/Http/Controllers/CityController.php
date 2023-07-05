<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::with('cities')->get();
        return view('admin.cities.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        $country = Country::pluck('name','id');
        return view('admin.cities.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:cities",
            'country_id' => "required"
        ]);
       
        City::create([
            'name' => $request->name,
            'country_id' => $request->country_id
        ]);
        return redirect()->route('admin.cities.index')->with('info','La ciudad ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => "required|unique:cities,name,$city->id",
        ]);
        $city->update($request->all());
        return redirect()->route('admin.cities.index')->with('info','Ciudad actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
