<?php
 
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Grupo_doc_mat_plan_gestion_unidad extends Model
{
    protected $table = 'grupo_doc_mat_plan_gestion_unidades';

    protected $fillable = ['subir_notas','fecha_inicio_doc','fecha_fin_doc','activo','id_tipo_planilla','id_usuario_asignar_sub_rol','id_agrupar_materias'];
    
    public function usuario_asignar_sub_roles()
	{
		return $this->belongsTo('App\Usuario_asignar_sub_rol', 'id_usuasigsubrol', 'id');
	}
	public function tipo_planillas()
	{
		return $this->belongsTo('App\Tipo_planilla', 'id_tipo_planilla', 'id');
	}
} 
