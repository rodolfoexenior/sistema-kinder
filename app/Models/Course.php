<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
    
    public function coursemanagments()
    {
        return $this->hasMany(CourseManagment::class);
    }
}
