<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion_grupo_materia_plan_gestion_unidad extends Model
{
    protected $table = 'Inscripcion_grupo_materia_plan_gestion_unidades';

	protected $fillable = ['tipo_ins_grupo','id_inscripcion','id_grupo_materia_plan_gestion_unidad'];

	public function estudiante_defensas()
	{
		return $this->hasMany('App\Estudiante_defensa','id_ins_gr_mat_plan_gest_unid','id');
	}

	public function inscripcion()
	{
		return $this->belongsTo('App\Inscripcion', 'id_inscripcion','id');
	}

	public function grupo_materia_plan_gestion_unidad()
	{
		return $this->belongsTo('App\Grupo_materia_plan_gestion_unidad', 'id_grupo_materia_plan_gestion_unidad', 'id');
	}
}
