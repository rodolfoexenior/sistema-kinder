<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id'
    ];
    
    public function country()
    {
        return $this->belongsTo(Country::class);
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
