<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];


    // Un rol puede tener muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rol_id');
    }
}
