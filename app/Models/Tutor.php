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
        'user_id'
    ];
    public function user(){
        return this->belongsTo(User::class);
    }
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function image(): MorphToMany
    {
        return $this->morphToMany(Image::class, 'imageable');
    }
    public function pays():HasMany {
        return this->hasMany(Pay::class);
    }
}
