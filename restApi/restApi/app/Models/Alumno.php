<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Alumno extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'alumnos';
    protected $fillable = [
        'nombre',
        'edad',
        'genero',
        'materia',
        'ednia_indigena',
        'horario',
        'calificacion_prepa',
        'becado',
        'problemas_salud',
    ];
    use HasFactory;
}
