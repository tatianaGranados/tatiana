<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';

	protected $fillable = [ 'cod_materia','nombre_materia','nombre_corto','nombre_impresion']; 

	public function unidad_materias()
	{
		return $this->hasMany('App\Unidad_materia', 'id_materia', 'id');
	}
}
