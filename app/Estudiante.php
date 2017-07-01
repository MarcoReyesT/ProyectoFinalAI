<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'rut',
    	'nombre',
    	'apellido',
    	'telefono',
    	'correo'
    ];
}
