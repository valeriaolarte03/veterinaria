<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['mascota_id', 'fecha_cita', 'motivo', 'estado'];
    

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'mascota_id');
    }

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class, 'cita_id');
    }
}
