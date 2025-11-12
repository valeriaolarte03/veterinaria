<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    protected $fillable = ['cita_id', 'descripcion', 'medicamento', 'costo'];

    // Un tratamiento pertenece a una cita
    public function cita()
    {
        return $this->belongsTo(Cita::class, 'cita_id');
    }
}
