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
        'user_id',
        'cities_id'
    ];
    public function user(): BelongTo {
        return this->belongsTo(User::class);
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function coursemanagments(): HasMany
    {
        return $this->hasMany(CourseManagment::class);
    }
    public function image(): MorphToMany
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    
}