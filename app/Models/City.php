<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contries_id'
    ];
    
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
    public function tutors(): HasMany
    {
        return $this->hasMany(Tutor::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
