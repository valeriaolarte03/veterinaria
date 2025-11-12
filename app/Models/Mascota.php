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

        public function raza()
    {
        return $this->belongsTo(Raza::class, 'raza_id');
    }
    
}
