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
        'prenatal',
        'habla',
        'camina',
        'direccion',
        'city_id', 
        'num_cedula',
        'extension',
        'nacimiento',
        'num_certificado',
        'oficialia',
        'libro',
        'partida',
        'folio',
        'province_id',
        'fecha_registro',
        'foto',
        
    ];

   
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
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
