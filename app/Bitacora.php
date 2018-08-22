<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table = 'bitacoras';

    protected $fillable = ['ip','desc_operacion','fecha_bitacora','id_usuario','id_tipo_op_bitacora'];

    public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}

	 public function tipo_operacion_bitacora()
	{
		return $this->belongsTo('App\Tipo_operacion_bitacora', 'id_tipo_op_bitacora', 'id');
	}

}
