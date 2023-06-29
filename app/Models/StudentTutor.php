<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTutor extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'tutor_id'
    ];
}
