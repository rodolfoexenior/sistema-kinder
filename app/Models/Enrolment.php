<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;

    protected $fillable = [
        'managment_id',
        'student_id',
        'course_managmet_id',
        'observacion'
    ];

    public function managment(){
        return $this->belongsTo(Managment::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function course_managment(){
        return $this->hasMany(CourseManagment::class);
    }

    public function pays() {
        return $this->hasMany(Pay::class);
    }
}
