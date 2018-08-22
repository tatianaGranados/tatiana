<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_direccion extends Model
{
    protected $table = 'usuario_direcciones';

    protected $fillable = ['nombre_direccion', 'id_usuario', 'id_tipo_direccion'];

    public function tipo_direccion()
	{
		return $this->belongsTo('App\Tipo_direccion', 'id_tipo_direccion', 'id');
	}
	public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}
}
