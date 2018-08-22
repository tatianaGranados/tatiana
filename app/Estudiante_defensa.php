<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante_defensa extends Model
{
    protected $table = 'estudiante_defensas';
    
    protected $fillable = ['nota','observacion'];

    public function defensa()
	{
		return $this->belongsTo('App\Defensa', 'id_defensa','id');
	}
	public function inscripcion_grupo_materia_plan_gestion_unidad()
	{
		return $this->belongsTo('App\Inscipcion_gurpo_materia_plan_gestion_unidad', 'id_ins_gr_mat_plan_gest_unid','id');
	}
}
