<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['nombre_rol', 'descripcion_rol'];

    public function sub_roles()
	{
		return $this->hasMany('App\Sub_rol', 'id_rol','id');
	}
    
}
