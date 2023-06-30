<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managment extends Model
{
    use HasFactory;
    protected $fillable = [
        'gestion'
    ];
    
    public function coursemangment()
    {
        return $this->hasMany(CourseManagment::class);
    }
    
    public function enrolment(){
        return $this->hasMany(Enrolment::class);
    }

    
     
}
