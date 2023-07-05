<?php

namespace App\Http\Controllers;

use App\Models\Managment;
use Illuminate\Http\Request;

class ManagmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managments = Managment::all();
        return view('admin.yearbooks.index', compact('managments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.yearbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gestion' => "required|integer|min:2020|max:2100|unique:managments"
        ]);
       
        Managment::create($request->all());
        return redirect()->route('admin.yearbooks.index')->with('info','La gestión ha sido creado con éxito');
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
    public function edit(Managment $yearbook)
    {
        return view('admin.yearbooks.edit', compact('yearbook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Managment $managment)
    {
        $request->validate([
            'gestion' => "required|integer|min:2020|max:2100|unique:managments,gestion,$managment->id"
        ]);
        $managment->update($request->all());
        return redirect()->route('admin.yearbooks.index')->with('info','La gestión ha sido editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
