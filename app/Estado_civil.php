<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_civil extends Model
{
    protected $table = 'estado_civiles';

    protected $fillable = ['estado_civil'];

    public function usuarios()
	{
		return $this->hasMany('App\Usuario', 'id_estado_civil','id');
	}
}
