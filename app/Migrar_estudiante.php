<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Migrar_estudiante extends Model
{
    protected $table = 'migrar_estudiantes';

	protected $fillable = ['codigo','ci','nombres','apellidos','plan','fecha','sexo','inscrito']; 
}
