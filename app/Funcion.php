<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    protected $table = 'funciones';
    
    protected $fillable = ['nombre_funcion'];

    public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol', 'id_funcion','id');
	}
}
