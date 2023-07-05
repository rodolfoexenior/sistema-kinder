<?php

namespace App\Http\Controllers;

use App\Models\Turn;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $turns = Turn::all();
       return view('admin.turns.index', compact('turns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.turns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => "required|unique:turns",
            'descripcion'  => "required",
            'precio'=> "required|decimal:0,2",
            'mes'=> "required|integer|min:1|max:10"
        ]);
        Turn::create($request->all());
        return redirect()->route('admin.turns.index')->with('info','Turno o servicio creado con éxito.');
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
    public function edit(Turn $turn)
    {
        return view('admin.turns.edit', compact('turn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turn $turn)
    {
        $request->validate([
            'nombre' => "required|unique:turns,nombre,$turn->id",
            'descripcion'  => "required",
            'precio'=> "required|decimal:0,2",
            'mes'=> "required|integer|min:1|max:10"
        ]);
        $turn->update($request->all());
        return redirect()->route('admin.turns.index')->with('info','Turno o servicio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
