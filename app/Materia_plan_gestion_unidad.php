<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia_plan_gestion_unidad extends Model
{
    protected $table = 'materia_plan_gestion_unidades';

    protected $fillable = ['porcentaje','nivel','plan_global','version','id_unidad_materia','id_plan_gestion_unidad'];

    public function plan_gestion_unidades()
	{
		return $this->belongsTo('App\Plan_gestion_unidad', 'id_plan_gestion_unidad', 'id');
	}

	public function unidad_materias()
	{
		return $this->belongsTo('App\Unidad_materia', 'id_unidad_materia', 'id');
	}

	public function grupo_materia_plan_gestion_unidades()
	{
		return $this->hasMany('App\Grupo_materia_plan_gestion_unidad', 'id_mat_plan_gestion_unidad', 'id');
	}
}
