<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion_defensa extends Model
{
    protected $table = 'funcion_defensas';

	protected $fillable = ['descripcion_funcion','estado_funcion'];

	public function asignar_funcion_defensas()
	{
		return $this->hasMany('App\Asignar_funcion_defensa','id_funcion_defensa','id');
	}
}
