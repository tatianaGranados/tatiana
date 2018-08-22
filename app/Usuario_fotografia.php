<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_fotografia extends Model
{
    protected $table = 'usuario_fotografias';

    protected $fillable = ['fotografia', 'fecha_subida', 'valida', 'observacion', 'id_usuario'];

    public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}
}
