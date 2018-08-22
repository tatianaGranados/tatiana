<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = ['nombre_pais', 'peso_pais'];

    public function ciudades()
	{
		return $this->hasMany('App\Ciudad', 'id_pais','id');
	}

	
}
