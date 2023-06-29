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

    public function managment(): BelongsTo{
        return this->belongsTo(Managment::class);
    }
    public function students(): HasMany{
        return this->hasMany(Student::class);
    }
    public function course_managment(): HasMany{
        return this->hasMany(CourseManagment::class);
    }

    public function pays():HasMany {
        return this->hasMany(Pay::class);
    }
}
