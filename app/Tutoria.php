<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model
{
    protected $table = 'tutorias';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'estudiante_id',
        'materia_id',
    	'tutor_id',
    	'fecha',
    	'monto'
    ];
}
