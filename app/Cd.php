<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
     protected $table = 'cds';
     protected $fillable = [ 'fecha_registro','observacion','entregado','id_defensa'];
	
	public function defensa()
	{
		return $this->belongsTo('App\Defensa','id_defensa','id');
	}
}
