<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = [
        'enrolment_id',
        'tutor_id',
        'total',
        'pagado',
        'descuento',
        'metodo',
        'observacion'
    ];

    public function enrolment() {
        return $this->belongsTo(Enrolment::class);
    }
    public function tutor() {
        return $this->belongsTo(Tutor::class);
    }
}
