<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;
    protected  $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'mes'
    ];

    public function coursemangment()
    {
        return $this->hasMany(CourseManagment::class);
    }
}
