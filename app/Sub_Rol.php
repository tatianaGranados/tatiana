<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_rol extends Model
{
    protected $table = 'sub_roles';
   
    protected $fillable = ['nombre_sub_rol', 'descripcion_sub_rol', 'id_rol']; 

  
    public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol', 'id_sub_rol', 'id');
	}

	public function rol()
	{
		return $this->belongsTo('App\Rol', 'id_rol', 'id');
	}

	public function acceso_sub_roles()
	{
		return $this->hasMany('App\Acceso_sub_rol', 'id_sub_rol', 'id');
	}

	//Devolviendo Roles-SubRoles
	public function getRolSubRolAttribute()
	{
		return $this->rol->nombre_rol."	-->  ".$this->nombre_sub_rol;
	}

}
