<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_materia_plan_gestion_unidad extends Model
{
     protected $table = 'grupo_materia_plan_gestion_unidades';

     protected $fillable = ['cod_grupo','grupo_principal','id_mat_plan_gestion_unidad','id_tipo_planilla','id_agrupar_materias'];

    public function materia_plan_gestion_unidades()
	{
		return $this->belongsTo('App\Materia_plan_gestion_unidad', 'id_mat_plan_gestion_unidad', 'id');
	}
	public function tipo_planillas()
	{
		return $this->belongsTo('App\Tipo_planilla', 'id_tipo_planilla', 'id');
	}
}
