<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_materia extends Model
{
     protected $table = 'unidad_materias';

     protected $fillable = ['id_unidad','id_materia'];

     public function unidades()
	{
		return $this->belongsTo('App\Unidad', 'id_unidad', 'id');
	}
	public function materias()
	{
		return $this->belongsTo('App\Materia', 'id_materia', 'id');
	}
}
