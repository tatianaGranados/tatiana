<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_email extends Model
{
    protected $table = 'usuario_emails';

    protected $fillable = ['email', 'email_activo', 'id_usuario', 'id_tipo_email'];

    public function tipo_email()
	{
		return $this->belongsTo('App\Tipo_email', 'id_tipo_email', 'id');
	}

	public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}
}
