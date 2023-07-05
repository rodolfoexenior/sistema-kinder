<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $users = User::pluck('email','id');
        return view('admin.teachers.create',compact('countries','users'));
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
            'num_cedula'=> "required|unique:teachers",
            'nacimiento'=>  'required|date|before:today',
            'medio_difusion'=> "required",
            'user_id'=> "required",
            ]);
        Teacher::create([
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
        'matricula'=> $request->matricula,
        'especialidad'=> $request->especialidad,
        'cargo'=> $request->cargo,
        'medio_difusion'=> $request->medio_difusion,
        'user_id'=> $request->user_id,
        ]);
        return redirect()->route('admin.teachers.index')->with('info','El maestro ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $users = User::pluck('email','id');
        return view('admin.teachers.edit',compact( 'teacher','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'nombres' => "required",
            'paterno'=> "required",
            'sexo'=> "required",
            'city_id'=> "required",
            'num_cedula'=> "required|unique:teachers,num_cedula,$teacher->id",
            'nacimiento'=>  'required|date|before:today',
            'medio_difusion'=> "required",
            'user_id'=> "required",
            ]);
        $teacher->update($request->all());
        return redirect()->route('admin.teachers.index')->with('info','El maestro ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
