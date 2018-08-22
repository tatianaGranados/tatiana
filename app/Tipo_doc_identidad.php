<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_doc_identidad extends Model
{
    protected $table = 'tipo_doc_identidades';

    protected $fillable = ['nombre_tipo_doc_identidad'];

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario','id_tipo_doc_identidad','id');
    }
}
