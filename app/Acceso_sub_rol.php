<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso_sub_rol extends Model
{
    protected $table = 'acceso_sub_roles';

    protected $fillable = ['id_sub_rol', 'id_sub_acceso'];

    public function sub_roles()
	{
		return $this->belongsTo('App\Sub_rol', 'id_sub_rol','id');
	}
	public function sub_accesos()
	{
		return $this->belongsTo('App\Sub_acceso', 'id_sub_acceso','id');
	}
}
