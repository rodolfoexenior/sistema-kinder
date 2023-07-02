<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'paterno',
        'materno',
        'sexo',
        'num_cedula',
        'extension',
        'nacimiento',
        'foto',
        'telefono',
        'direccion',
        'medio_difusion',
        'matricula',
        'especialidad',
        'cargo',
        'user_id',
        'city_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function coursemanagments()
    {
        return $this->hasMany(CourseManagment::class);
    }
    public function image()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    
}