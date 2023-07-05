<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
        'cities_id',
        'prenatal',
        'habla',
        'camina',
        'num_certificado',
        'oficialia',
        'libro',
        'partida',
        'folio',
        'provincia',
        'fecha_registro',
        'cities_id'
    ];

   
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function tutors()
    {
        return $this->belongsToMany(Tutor::class)->withTimestamps();
    }
    public function enrolment(){
        return $this->belongsTo(Enrolment::class);
    }

    public function image()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

}
