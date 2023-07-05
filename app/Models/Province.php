<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city_id'
    ];
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    public function tutors()
    {
        return $this->hasMany(Tutor::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
