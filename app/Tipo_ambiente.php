<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_ambiente extends Model
{
    protected $table = 'tipo_ambientes';

    protected $fillable = [ 'nombre_tipo_ambiente'];

    public function ambientes()
	{
		return $this->hasMany('App\Ambiente','id_tipo_ambiente','id');
	}
}
