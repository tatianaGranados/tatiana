<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'ambientes';

    protected $fillable = ['nombre_ambiente','max_estudiantes','ambiente_activo','id_unidad','id_tipo_ambiente'];

    public function tipo_ambiente()
	{
		return $this->belongsTo('App\Tipo_ambiente', 'id_tipo_ambiente', 'id');
	}

	public function unidad()
	{
		return $this->belongsTo('App\Unidad', 'id_unidad', 'id');
	}

	public function defensas()
	{
		return $this->hasMany('App\Defensa','id_ambiente','id');
	}
}
