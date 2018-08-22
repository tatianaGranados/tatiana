<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    protected $fillable = [ 'cod_plan', 'nombre_plan','nombre_plan_corto'];

    public function plan_gestion_unidades()
	{
		return $this->hasMany('App\Plan_gestion_unidad', 'id_plan', 'id');
	}
}
