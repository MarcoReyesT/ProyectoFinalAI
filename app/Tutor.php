<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

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
