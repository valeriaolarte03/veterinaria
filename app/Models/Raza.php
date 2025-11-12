<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;


    protected $fillable = ['nombre', 'especie_id'];


    // Una raza pertenece a una especie
    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }
}
