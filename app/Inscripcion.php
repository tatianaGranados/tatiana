<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

	protected $fillable = ['cod_inscripcion','ins_activo','observacion','tipo_inscripcion','id_usuario_asignar_sub_rol','id_plan_gestion_unidad'];

	public function ins_gr_mat_plan_gest_unidades()
	{
		return $this->hasMany('App\Inscripcion_grupo_materia_plan_getion_unidad','id_inscripcion','id');
	}

	public function usuario_asignar_sub_rol()
	{
		return $this->belongsTo('App\Usuario_asignar_sub_rol', 'id_usuario_asignar_sub_rol','id');
	}

	public function plan_gestion_unidad()
	{
		return $this->belongsTo('App\Plan_gestion_unidad', 'id_plan_gestion_unidad','id');
	}
}
