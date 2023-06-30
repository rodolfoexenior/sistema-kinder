<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::with('cities')->get();
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = Country::create($request->all());
        return redirect()->route('admin.countries.edit',$country)->with('info','El tutor ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('admin.countries.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('admin.countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $country->update($request->all());
        return redirect()->route('admin.countries.index')->with('info','El tutor ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
    }
}
