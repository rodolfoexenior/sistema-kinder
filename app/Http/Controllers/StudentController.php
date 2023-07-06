<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'num_cedula'=> "unique:students",
            'nacimiento'=>  'required|date|before:today',
            'foto'=> 'image|max:2048',
            'foto_ci_frontal'=> 'image|max:2048',
            'foto_ci_posterior'=> 'image|max:2048',
            'foto_cert_nac'=> 'image|max:2048'
 
        ]);
        $urlfoto = "";
        $urlcifrontal = "";
        $urlciposterior = "";
        $urlcnac = "";
        if ($request->file('foto') != null){
            $foto = $request->file('foto')->store('public/imagenes');
            $urlfoto = Storage::url($foto);
        }
        if ($request->file('foto_ci_frontal') != null){
            $fotocifrontal = $request->file('foto_ci_frontal')->store('public/imagenes');
            $urlcifrontal = Storage::url($fotocifrontal);
        }
        if ($request->file('foto_ci_posterior') != null){
            $fotociposterior = $request->file('foto_ci_posterior')->store('public/imagenes');
            $urlciposterior = Storage::url($fotociposterior);
        }
        if ($request->file('foto_cert_nac') != null){
            $fotocnac = $request->file('foto_cert_nac')->store('public/imagenes');
            $urlcnac = Storage::url($fotocnac);
        }
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
            'foto'=> $urlfoto,
            'foto_ci_frontal'=> $urlcifrontal,
            'foto_ci_posterior'=> $urlciposterior,
            'foto_cert_nac'=> $urlcnac,
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
            'num_cedula'=> "unique:students,num_cedula,$student->id",
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
