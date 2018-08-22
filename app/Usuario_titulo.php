<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_titulo extends Model
{
    protected $table = 'usuario_titulos';

    protected $fillable = [ 'descripcion','fecha_titulo','id_usuario','id_titulo'];

    public function usuarios()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}
	public function titulos()
	{
		return $this->belongsTo('App\Titulo', 'id_titulo', 'id');
	}
}
