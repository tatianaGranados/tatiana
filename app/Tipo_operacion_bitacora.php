<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_operacion_bitacora extends Model
{
     protected $table = 'tipo_operacion_bitacoras';

    protected $fillable = ['operacion_bitacora'];

    public function bitacoras()
	{
		return $this->hasMany('App\Bitacora', 'id_usuario', 'id');
		
	}
}
