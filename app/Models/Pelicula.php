<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'duracion_minutos',
    ];

    public function salas() 
    {
        return $this->belongsToMany(Sala::class);
    } 

}
