<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensa extends Model
{
    protected $table = 'defensas';

	protected $fillable = ['titulo_defensa','fecha_defensa','hora_defensa','descripcion','avance','empresa','id_modalidad_titulacion','id_ambiente'];

	public function estudiante_defensas()
	{
		return $this->hasMany('App\Estudiante_defensa','id_defensa','id');
	}

	public function asignar_funcion_defensas()
	{
		return $this->hasMany('App\Asignar_funcion_defensa','id_defensa','id');
	}

	public function modalidad_titulacion()
	{
		return $this->belongsTo('App\Modalidad_titulacion', 'id_modalidad_titulacion','id');
	}

	public function ambiente()
	{
		return $this->belongsTo('App\Ambiente', 'id_ambiente','id');
	}
	public function cds()
	{
		return $this->hasMany('App\Cd', 'id_defensa','id');
	}
}
