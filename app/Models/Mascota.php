<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;


    protected $fillable = ['nombre', 'fecha_nacimiento', 'sexo', 'cliente_id', 'raza_id'];


    // Una mascota pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Una mascota puede tener muchas citas
    public function citas()
    {
        return $this->hasMany(Cita::class, 'mascota_id');
    }
}
