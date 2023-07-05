<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseManagment;
use App\Models\Managment;
use App\Models\Teacher;
use App\Models\Turn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
      
class CourseManagmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coursemanagments = CourseManagment::all();
        return view('admin.coursemanagments.index', compact('coursemanagments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $managments = Managment::pluck('gestion','id');
        $courses = Course::pluck('nombre','id');
        $teachers = Teacher::select("id", DB::raw("CONCAT(teachers.nombres,' ',teachers.paterno,' ',teachers.materno,' ',teachers.num_cedula) as full_name"))->pluck('full_name', 'id');      
        $turns = Turn::pluck('nombre','id');
        return view('admin.coursemanagments.create', compact('managments','courses','teachers','turns')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'managment_id' => "required",
            'course_id'=> "required",
            'teacher_id'=> "required",
            'turn_id' => "required"
        ]);
        CourseManagment::create($request->all());
        return redirect()->route('admin.coursemanagments.index')->with('info','La distribución ha sido creada con éxito');
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
    public function edit(CourseManagment $coursemanagment)
    {
        $managments = Managment::pluck('gestion','id');
        $courses = Course::pluck('nombre','id');
        $teachers = Teacher::select("id", DB::raw("CONCAT(teachers.nombres,' ',teachers.paterno,' ',teachers.materno,' ',teachers.num_cedula) as full_name"))->pluck('full_name', 'id');      
        $turns = Turn::pluck('nombre','id');
        return view('admin.coursemanagments.edit', compact('coursemanagment','managments','courses','teachers','turns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,CourseManagment $coursemanagment)
    {
        $request->validate([
            'managment_id' => "required",
            'course_id'=> "required",
            'teacher_id'=> "required",
            'turn_id' => "required"
        ]);
        $coursemanagment->update($request->all());
        return redirect()->route('admin.coursemanagments.index')->with('info','La distribución ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
