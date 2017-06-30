<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model
{
    protected $table = 'tutorias';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'id',
    	'tutor_id',
    	'ramo_id'
    ];
}
