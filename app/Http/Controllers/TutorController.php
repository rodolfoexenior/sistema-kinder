<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Tutor;
use App\Models\User;
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
        $countries = Country::all();
        $users = User::pluck('email','id');
        return view('admin.tutors.create',compact('countries','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => "required",
            'paterno'=> "required",
            'sexo'=> "required",
            'city_id'=> "required",
            'num_cedula'=> "required|unique:tutors",
            'nacimiento'=>  'required|date|before:today',
            'medio_difusion'=> "required",
            'user_id'=> "required",
            ]);

        Tutor::create([
        'nombres' => $request->nombres,
        'paterno'=> $request->paterno,
        'materno'=> $request->materno,
        'sexo'=> $request->sexo,
        'city_id'=> $request->city_id,
        'num_cedula'=> $request->num_cedula,
        'extension'=> $request->extension,
        'nacimiento'=> $request->nacimiento,
        'foto'=> $request->foto,
        'telefono'=> $request->telefono,
        'direccion'=> $request->direccion,
        'medio_difusion'=> $request->medio_difusion,
        'user_id'=> $request->user_id,
        ]);
        return redirect()->route('admin.tutors.index')->with('info','El tutor ha sido creado con éxito');
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
        
        $users = User::pluck('email','id');
        return view('admin.tutors.edit',compact('tutor', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutor $tutor)
    {
        $request->validate([
            'nombres' => "required",
            'paterno'=> "required",
            'sexo'=> "required",
            'city_id'=> "required",
            'num_cedula'=> "required|unique:tutors,num_cedula,$tutor->id",
            'nacimiento'=>  'required|date|before:today',
            'medio_difusion'=> "required",
            'user_id'=> "required",
            ]);
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
