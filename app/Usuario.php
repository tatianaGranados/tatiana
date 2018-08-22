<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends User
{

    protected $table = 'usuarios';

	protected $fillable = ['doc_identidad', 'login', 'clave', 'apellidos', 'nombres', 'sexo', 'fecha_nac', 'usuario_activo', 'inscribir_adm', 'estilo', 'subir_foto', 'id_estado_civil', 'id_provincia', 'id_ciudad', 'id_tipo_doc_identidad']; 
	protected $hidden = array('clave');

	protected $primaryKey = "doc_identidad";

	public function setPasswordAttribute($value)
    {
    	if($value !== null)
    		$this->attributes['clave'] = bcrypt($value);
    }
	public function tipo_doc_identidad()
	{
		return $this->belongsTo('App\Tipo_doc_identidad', 'id_tipo_doc_identidad','id');
	}

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad', 'ciudad_expedido_doc','id');
	}

	public function estado_civil()
	{
		return $this->belongsTo('App\Estado_civil', 'id_estado_civil','id');
	}

	public function provincia()
	{
		return $this->belongsTo('App\Provincia', 'id_provincia', 'id');
	}

	public function usuario_direcciones()
	{
		return $this->hasMany('App\Usuario_direccion','id_usuario','id');
	}

	public function usuario_fotografias()
	{
		return $this->hasMany('App\Usuario_fotografia', 'id_usuario','id');
	}

	public function usuario_telefonos()
	{
		return $this->hasMany('App\Usuario_telefono', 'id_usuario','id');
	}

	public function usuario_emails()
	{
		return $this->hasMany('App\Usuario_email','id_usuario', 'id');
	}
	public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol', 'id_usuario', 'id');
	}
	public function usuario_titulos()
	{
		return $this->hasMany('App\Usuario_titulo', 'id_usuario', 'id');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->clave;
	}
	//Buscador de Usuario
	public function scopeBuscador($query,$nombreUsuario)
	{
		return $query->where('nombres','like','%'.$nombreUsuario.'%')
						->orwhere('apellidos','like','%'.$nombreUsuario.'%')
						->orwhere('doc_identidad','like','%'.$nombreUsuario.'%');	
	}
	public function scopeBuscador2($query,$ci,$nombreUsuario,$apellido)
	{
		if($ci!=null && $nombreUsuario!=null && $apellido!=null)
		{		
			$resultado=$query->where([['nombres','like','%'.$nombreUsuario.'%'],['apellidos','like','%'.$apellido.'%'],['doc_identidad','like','%'.$ci.'%']]);
		}elseif ($ci==null) {
			$resultado=$query->where([['nombres','like','%'.$nombreUsuario.'%'],['apellidos','like','%'.$apellido.'%']]);
		}elseif ($nombreUsuario==null) {
			$resultado=$query->where([['apellidos','like','%'.$apellido.'%'],['doc_identidad','like','%'.$ci.'%']]);
		}elseif ($apellido==null) {
			$resultado=$query->where([['nombres','like','%'.$nombreUsuario.'%'],['doc_identidad','like','%'.$ci.'%']]);
		}elseif($ci!=null && $nombreUsuario!=null){
			$resultado=$query->where('apellidos','like','%'.$apellido.'%');
		}elseif($ci!=null && $apellido!=null){
			$resultado=$query->where('nombres','like','%'.$nombreUsuario.'%');

		}elseif($nombreUsuario!=null && $apellido!=null)
			$resultado=$query->where('doc_identidad','like','%'.$ci.'%');

		return $resultado;
	}
	public function scopeIdentidad($query,$ci)
	{
		// $consultaAux=$query;
		if($ci!=null)
		// if($ci)
		{
			return $query->where('doc_identidad','like','%'.$ci.'%');
		}
	}
	public function scopeNombres($query,$nombreUsuario)
	{
		// if(!empty($nombreUsuario))
		if($nombreUsuario!=null)
		{
			return $query->where('nombres','like','%'.$nombreUsuario.'%');
		}
	}
	public function scopeApellido($query,$apellido)
	{
		if($apellido!=null)
		// if($apellido)
		{
			return $query->where('apellidos','like','%'.$apellido.'%');
			
		}
	}
	public function getNombreCompletoAttribute()
	{
		return $this->nombres." ".$this->apellidos;
	}
	public function roles($query,$role)
	{
		$roles = $query->select('nombres')-where('id',Auth::user()->id);
		return $roles;
	}
	
}
