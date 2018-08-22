<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Unidad extends Model
{
    protected $table = 'unidades';

    protected $fillable = ['nombre_unidad', 'telefono_unidad', 'interno_unidad', 'correo_unidad'];

    public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol', 'id_unidad','id');
	}

	public function plan_gestion_unidades()
	{
		return $this->hasMany('App\Plan_gestion_unidad', 'id_unidad','id');
	}
	public function unidad_materias()
	{
		return $this->hasMany('App\Unidad_materia', 'id_unidad','id');
	}
	
}
