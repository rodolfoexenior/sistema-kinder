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
        'precio_mes',
        'num_cuotas'
    ];

    public function coursemangment(): HasMany
    {
        return $this->hasMany(CourseManagment::class);
    }
}
