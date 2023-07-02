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
        return view('admin.managments.index', compact('managments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.managments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Managment::create($request->all());
        return redirect()->route('admin.managments.index')->with('info','La gestión ha sido creado con éxito');
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
    public function edit(Managment $managment)
    {
        return view('admin.managments.edit', compact('managment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Managment $managment)
    {
        $managment->update($request->all());
        return redirect()->route('admin.managments.index')->with('info','La gestión ha sido editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
