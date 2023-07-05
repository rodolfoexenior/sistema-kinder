<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
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
        'user_id',
        'city_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function image()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }
    public function pays(){
        return $this->hasMany(Pay::class);
    }
}
