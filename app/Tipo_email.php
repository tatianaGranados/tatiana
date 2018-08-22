<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_email extends Model
{
    protected $table = 'tipo_emails';
    
    protected $fillable = ['nombre_tipo_email', 'peso_tipo_email'];

    public function usuario_emails()
	{
		return $this->hasMany('App\Usuario_email','id_tipo_email', 'id');
	}
}
