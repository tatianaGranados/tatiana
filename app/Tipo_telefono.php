<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_telefono extends Model
{
    protected $table = 'tipo_telefonos';

    protected $fillable = ['nombre_tipo_telefono', 'peso_tipo_telefono'];

    public function usuario_telefonos()
	{
		return $this->hasMany('App\Usuario_telefono', 'id_tipo_telefono','id');
	}
}
