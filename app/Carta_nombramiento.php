<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta_nombramiento extends Model
{
    protected $table = 'carta_nombramientos';
    
    protected $fillable = ['fecha_carta','cite','campo_extra_1','campo_extra_2','campo_extra_3','id_asignar_funcion_defensa'];

    public function asignar_funcion_defensa()
	{
		return $this->belongsTo('App\Asignar_funcion_defensa', 'id_asignar_funcion_defensa','id');
	}
}
