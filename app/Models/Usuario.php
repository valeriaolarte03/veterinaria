<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $fillable = ['nombre', 'email', 'rol_id', 'fecha_creacion'];


    // Un usuario pertenece a un rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
