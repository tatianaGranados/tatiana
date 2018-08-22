<?php

namespace App\Http\Controllers;
    set_time_limit(1000);
    ini_set('memory_limit','1024M');
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Acceso;
use App\Usuario;
use App\Sub_acceso;
use App\Usuario_asignar_sub_rol;
use App\Sub_rol;
use App\Funcion;
use App\Unidad;
use App\Acceso_sub_rol;
use Response;
use Auth;
use Carbon\carbon;
use App\Http\Requests\accesosRequest;//msj validacion tati
use Illuminate\Support\Facades\Input; //tati validacion
use App\Events\Accesos\AccesosEvent;
class AccesoController extends Controller
{
	
	public function index(Request $request)
	{
		if($request->ci==null && $request->nombre==null && $request->apellido==null ){
			$usuarios='vacio';
		}else
		{
		$usuarios=Usuario::identidad($request->ci)
		->nombres($request->nombre)
		->apellido($request->apellido)
		->orderby('apellidos','desc')->paginate(10);
		$permisosAsignados=Usuario_asignar_sub_rol::all();
		}

		return view('accesos.asignarUsuarioSubRol',compact('usuarios','permisosAsignados'));

		// return view('accesos.asignarUsuarioSubRol',compact('usuarios','permisosAsignados'));
		// return view('accesos.asignarUsuarioSubRolUsuario',compact('usuarios','permisosAsignados'));
		// }
	}
//Formulario de asignacion de nuevos subroles a un usuario
	public function nuevaAsignacion($id)
	{
		$permisosAsignados=Usuario_asignar_sub_rol::where('id_usuario','=',$id)->get();
		$permisoUsuario=Usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->where('usuarios.id','=',$id)->get()->first();
		$subRol=Sub_rol::all();
		$unidad=Unidad::all();
		$funcion=Funcion::all();

		//return $asignar;
		return view('accesos.nuevaAsignacion',compact('permisosAsignados','permisoUsuario','subRol','unidad','funcion'));
	}

	public function validarNuevaAsignacion(accesosRequest $request, $id)
	{ 	
		//return $id;
		try {

                $asignar = new Usuario_asignar_sub_rol();           
               	$asignar->cod_sis = $request->sis;
               	$asignar->fecha_inicio = $request->fecha_inicio;
               	$asignar->fecha_fin = $request->fecha_fin;
               	$asignar->activo = $request->activo;
               	$asignar->id_funcion = $request->funcion;
               	$asignar->id_sub_rol = $request->subRol;
               	$asignar->id_unidad = $request->unidad;
               	$asignar->id_usuario = $id;
               	$asignar->save();
               	$asignar=Usuario_asignar_sub_rol::all()->last();
               	$asignar->desc='ID Registrado Usuario_asignar_sub_rol: '.$asignar->id;
               	$asignar->action=26;
            	event(new AccesosEvent($asignar));
               	$notification = array('mensaje3' =>'nueva asignacion guardado correctamente',
            'alert-type'=>'success');
               	return redirect()->route('accesos.index')->with($notification);
           } catch (Exception $e) {
               	return "Fatal Error -".$e->getMessage();
           }
	}

	public function modificarAsignacion($id)
	{
		
		$permisoUsuario=Usuario_asignar_sub_rol::findOrFail($id);
		$subRol=Sub_rol::all();
		$unidad=Unidad::all();
		$funcion=Funcion::all();

		
		return view('accesos.modificarAsignacion',compact('permisoUsuario','subRol','unidad','funcion'));
		/* 	
		return $permisoUsuario." id del sistema ".$id;
		return $id;
		*/
		//return view('usuarios.perfil')->with('usuario',$usuario);
	}
	
	public function validarModAsignacion(accesosRequest $request,$id)
	{ 	
		$permisoUsuario_mod=Usuario_asignar_sub_rol::findOrFail($id);
	    $permisoUsuario_mod->id_sub_rol = $request->subRol;
	    $permisoUsuario_mod->id_funcion = $request->funcion;
	    $permisoUsuario_mod->id_unidad = $request->unidad;
		$permisoUsuario_mod->cod_sis = $request->sis;
	    $permisoUsuario_mod->fecha_inicio = $request->fecha_inicio;
	    $permisoUsuario_mod->fecha_fin = $request->fecha_fin;
	    $permisoUsuario_mod->activo = $request->activo;
	    $permisoUsuario_mod->save();
	    $permisoUsuario_mod->desc='Modifico Usuario_asignar_sub_rol: '.$permisoUsuario_mod->id;
        $permisoUsuario_mod->action=27;
        event(new AccesosEvent($permisoUsuario_mod));
	    $notification = array('mensaje3' =>'nueva asignacion guardado correctamente',
            'alert-type'=>'success');
        return redirect()->route('accesos.index')->with($notification);     
		/*
	    return $id;
	    return $permisoUsuario_mod;
		$permisoUsuario_mod=Usuario_asignar_sub_rol::where('Usuario_asignar_sub_roles.id',$id)->get()->first();
		*/
	}
	public function modActivo($id)
	{
		
            $modActivo = Usuario_asignar_sub_rol::findOrFail($id);
			if ($modActivo->activo=='SI') {
				$modActivo->activo='NO';
			}else{
				$modActivo->activo='SI';
			}
			$modActivo->save();
			$modActivo->desc='ID de Usuario_asignar_sub_rol en el que se modifico el estado: '.$modActivo->id;
        	$modActivo->action=27;
        	event(new AccesosEvent($modActivo));
           // $modActivo->activo = $request->;
            //$modActivo->save();
            return redirect()->route('accesos.index');
	}

	public function validar()
	{
	//	$acceso=Acceso::join('sub_accesos','sub_accesos.id_acceso','=','accesos.id')->select('accesos.id','accesos.nombre_acceso','accesos.ruta_acceso','nombre_sub_acceso')->get();
		$acceso=Acceso::all();
		$subAcceso=Sub_acceso::all();
		return view('accesos.lista',compact('acceso','subAcceso'));
	}

	public function validarSubAccesos($id)
	{
		$subAcceso=Sub_acceso::where('id_acceso','=',$id)->get();
		//$subAcceso=Sub_acceso::perteneceAcceso($id);
		return $subAcceso;	
	} 

}
