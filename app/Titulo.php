<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table = 'titulos';

    protected $fillable = [ 'titlo_abreviado','titulo_descripcion','id_grado_instruccion'];

    public function grado_instrucciones()
	{
		return $this->belongsTo('App\Grado_instruccion', 'id_grado_instruccion', 'id');
	}

}
