<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('admin.tutors.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tutors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tutor = Tutor::create($request->all());
        return redirect()->route('admin.tutors.edit',$tutor)->with('info','El tutor ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutor $tutor)
    {
        return view('admin.tutors.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor)
    {
        return view('admin.tutors.edit',compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutor $tutor)
    {
        $tutor->update($request->all());
        return redirect()->route('admin.tutors.edit',$tutor)->with('info','El tutor ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor)
    {
        //
    }
}
