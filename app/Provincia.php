<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    protected $fillable = ['nombre_provincia', 'peso_provincia', 'id_ciudad'];

    public function usuarios()
	{
		return $this->hasMany('App\Usuario', 'id_provincia','id');
	}

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad', 'id_ciudad','id');
	}
	public static function provincias($id){

    	return Provincia::where('id_ciudad','=','$id')->get();
    }
}

