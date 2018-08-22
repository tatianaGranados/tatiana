<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_planilla extends Model
{
    protected $table = 'tipo_planillas';

    protected $fillable = [ 'tipo_planilla','tipo_planilla_abreviado'];

    public function grupo_materia_plan_gestion_unides()
	{
		return $this->hasMany('App\Grupo_materia_plan_gestion_unidad', 'id_tipo_planilla', 'id');
	}
	 public function grupo_doc_mat_plan_gestion_unidades()
	{
		return $this->hasMany('App\Grupo_doc_mat_plan_gestion_unidad', 'id_tipo_planilla', 'id');
	}
}
