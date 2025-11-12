<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

 
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];


    // Un cliente puede tener muchas mascotas
    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'cliente_id');
    }
}
