<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Receta extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'receta';//cambiar a la coleccion que elijan 

    //cambiar los campos
    protected $fillable = [
        'fecha','nombre_paciente','edad','peso','temperatura','dx','medicamentos','medico','cedula'
    ];
}
