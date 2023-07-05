<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.students.create',compact('countries'));
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
            'prenatal' => "required",
            'habla' => "required|date|before:today",
            'camina' => "required|date|before:today",
            'city_id'=> "required",
            'num_certificado'=> "required",
            'oficialia'=> "required",
            'libro'=> "required",
            'partida'=> "required",
            'folio'=> "required",
            'province_id'=> "required",
            'fecha_registro' => 'required',
            'num_cedula'=> "required|unique:students",
            'nacimiento'=>  'required|date|before:today',

 
        ]);
        Student::create([
            'nombres' => $request->nombres,
            'paterno'=> $request->paterno,
            'materno'=> $request->materno,
            'sexo'=> $request->sexo,
            'prenatal'=> $request->prenatal,
            'habla'=> $request->habla,
            'camina'=> $request->camina, 
            'city_id'=> $request->city_id,
            'direccion'=> $request->direccion,
            'num_cedula'=> $request->num_cedula,
            'nacimiento'=> $request->nacimiento,
            'num_certificado'=> $request->num_certificado,        
            'oficialia'=> $request->oficialia,
            'libro'=> $request->libro,
            'partida'=> $request->partida,
            'folio'=> $request->folio,
            'province_id'=> $request->province_id,
            'fecha_registro'=> $request->fecha_registro,
            'foto'=> $request->foto,
        ]);
        
        return redirect()->route('admin.students.index')->with('info', 'Alumno creado con éxito.');
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
    public function edit(Student $student)
    {
    
        $countries = Country::all();
        return view('admin.students.edit', compact('student','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
       
        $request->validate([
            'nombres' => "required",
            'paterno'=> "required",
            'sexo'=> "required",
            'prenatal' => "required",
            'habla' => "required|date|before:today",
            'camina' => "required|date|before:today",
            'num_certificado'=> "required",
            'oficialia'=> "required",
            'libro'=> "required",
            'partida'=> "required",
            'folio'=> "required",
            'city_id'=> "required",
            'province_id'=> "required",
            'fecha_registro' => 'required',
            'num_cedula'=> "required|unique:students,num_cedula,$student->id",
            'nacimiento'=>  'required|date|before:today',
 
            ]);
            $student->update($request->all());
            return redirect()->route('admin.students.index')->with('info','Alumno actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
