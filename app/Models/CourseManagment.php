<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseManagment extends Model
{
    use HasFactory;
    protected $fillable = [
        'managment_id',
        'course_id',
        'teacher_id',
        'turn_id'
    ];
    public function managment() 
    {
        return $this->belongsTo(Managment::class);
    }
    public function course() {
        return $this->belongsTo(Course::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function turn() {
        return $this->belongsTo(Turn::class);
    }
    public function enrolment() {
        return $this->belongsTo(Enrolment::class);
    }

}
