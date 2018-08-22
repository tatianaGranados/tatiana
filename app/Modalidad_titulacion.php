<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad_titulacion extends Model
{
    protected $table = 'modalidad_titulaciones';

	protected $fillable = ['nombre_modalidad','descripcion_modalidad']; 

	public function defensas()
	{
		return $this->hasMany('App\Defensa', 'id_modalidad_titulacion', 'id');
	}
	public function scopeModalidad($query,$id)
	{
		if($id>0){
			return $query->where('id','=',$id);
		}
	}
}
