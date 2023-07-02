<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseManagment;
use App\Models\Managment;
use App\Models\Teacher;
use App\Models\Turn;
use Illuminate\Http\Request;
      
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
    {/* 
        $managments = Managment::pluck('gestion','id');
        $courses = Course::pluck('nombre','id');
        $teachers = Teacher::pluck('gestion','id');
        $turns = Turn::pluck('gestion','id');
        return view('admin.coursemanagments.create', compact('managments','courses','teachers','turns')); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
