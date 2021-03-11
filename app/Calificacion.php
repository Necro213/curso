<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = "calificaciones";
    public $timestamps = false;
    protected $fillable = [
        "alumno",
        "materia",
        "calificacion",
        "aprobada"
    ];
}
