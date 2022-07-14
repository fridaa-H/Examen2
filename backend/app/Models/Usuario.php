<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [ 
        'nombre',
        'materia',
        'edad',
        'apellido_pa',
        'apellido_ma',
        'email',
        'password'
    ];

    //ESTO ES POR SI LA CLAVE PRIMARIA 
    //protected $primarykey = "Expediente";
    //protected $keytype=string;
    //public $incrementing=true;

}
