<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado_instruccion extends Model
{
    protected $table = 'grado_instrucciones';

    protected $fillable = ['grado_instruccion'];

    public function titulos()
	{
		return $this->hasMany('App\Titulo', 'id_grado_instruccion', 'id');
	}
}
