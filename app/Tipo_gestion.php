<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_gestion extends Model
{
    protected $table = 'tipo_gestiones';

    protected $fillable = [ 'nombre_tipo_gestion','nombre_corto_tipo_gestion','categoria','tipo_gestion'];

    public function gestiones()
	{
		return $this->hasMany('App\Gestion', 'id_tipo_gestion', 'id');
	}
}
