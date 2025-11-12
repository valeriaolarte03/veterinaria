<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;


    protected $fillable = ['nombre'];


    // Una especie puede tener muchas razas
    public function razas()
    {
        return $this->hasMany(Raza::class, 'especie_id');
    }
}
