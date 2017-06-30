<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencias';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'id',
    	'usuario_id',
    	'tutoria_id'
    ];
}
