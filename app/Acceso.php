<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table = "accesos";

    protected $fillable = ['nombre_acceso', 'ruta_acceso', 'descripcion_acceso', 'icono_acceso', 'defecto_acceso', 'peso_acceso'];

    public function sub_accesos()
	{
		return $this->hasMany('App\Sub_acceso', 'id_acceso', 'id');
	}

	
}
