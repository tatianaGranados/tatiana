<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [ 'nombre_ciudad', 'peso_ciudad', 'id_pais'];

    public function usuarios()
	{
		return $this->hasMany('App\Usuario', 'ciudad_expedido_doc', 'id');
	}

	public function pais()
	{
		return $this->belongsTo('App\Pais', 'id_pais', 'id');
	}

	public function provincias()
	{
		return $this->hasMany('App\Provincia', 'id_ciudad','id');//con que se relaciona
	}

	public static function ciudades($id){

    	return Ciudad::where('id_pais','=','$id')->get();
    }
    
}
