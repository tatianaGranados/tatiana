<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Sub_rol;
use App\Rol;
use App\Sub_acceso;
use App\Acceso_sub_rol;
use App\Acceso;
use Illuminate\Support\Facades\Input; //tati validacion
use App\Http\Requests\subRolesRequest;//msj validacion tati
use App\Events\Sub_rolesEvent;
class Sub_RolesController extends Controller
{
    
    private $path = 'sub_roles';
    public function __construct()
    {
        // Filtrar todos los métodos
    
    $this->middleware('permisos:5', ['only' => 'create','store']);
        $this->middleware('permisos:6', ['only' => 'edit','update','destroy']);
        $this->middleware('permisos:5,6', ['only' => 'index']);
    }
    public function index()
    {
        $subroles=Sub_rol::all();
        $sRoles=Sub_rol::join('roles','roles.id','=','sub_roles.id_rol')->select('sub_roles.id','sub_roles.nombre_sub_rol','sub_roles.descripcion_sub_rol', 'roles.nombre_rol')->get();
        return view($this->path.'.index',compact('sRoles'));
    }

    
    public function create()
    {
        $rol= Rol::all();
        $subAcceso=Sub_acceso::all();
        $acceso = Acceso::all();
        //return $rol;
        return view($this->path.'.create',compact('rol','subAcceso','acceso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(subRolesRequest $request)
    {
        //return $request;
        try {
               $subRol = new Sub_rol();
               $subRol->nombre_sub_rol = $request->nombre_sub_rol;
               $subRol->descripcion_sub_rol = $request->desc_sub_rol;
               $subRol->id_rol=$request->rol_seleccionado;
               $subRol->save();
               $sub_accesos=$request->permiso;
               if(is_array($sub_accesos))
                {
                    foreach ($sub_accesos as $id_sub_acceso) 
                    {
                     
                    $subAcceso=new Acceso_sub_rol();
                    $subAcceso->id_sub_rol =    $subRol->id;
                    $subAcceso->id_sub_acceso = $id_sub_acceso;
                    $subAcceso->save();
               $sub_rol=Sub_rol::all()->last();
               $sub_rol->accesos=$subAcceso;
               $sub_rol->desc='Id del nuevo Registro: '.$sub_rol->id.' con Sub_acceso: '.$subAcceso->sub_accesos->nombre_sub_acceso;
               $sub_rol->action=12;
                event(new Sub_rolesEvent($sub_rol));
                    }
               }
               $notification = array('mensaje3' =>'sub Rol guardado correctamente',
            'alert-type'=>'success');
               return redirect()->route($this->path.'.index')->with($notification);
           } catch (Exception $e) {
               return "Fatal Error -".$e->getMessage();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$sRol = Sub_rol::findOrFail($id);
        $sRol=Sub_rol::join('roles','roles.id','=','sub_roles.id_rol')->select('sub_roles.id','sub_roles.nombre_sub_rol','sub_roles.descripcion_sub_rol', 'sub_roles.id_rol','roles.nombre_rol')->where('sub_roles.id','=',$id)->get()->first();
        $accesos=Acceso::all();
        $rol= Rol::all();
        $subAcceso=Sub_acceso::all();
        $subAccesoDefinidos=Sub_rol::join('acceso_sub_roles','acceso_sub_roles.id_sub_rol','=','sub_roles.id')->select('acceso_sub_roles.id_sub_acceso')->where('sub_roles.id','=',$id)->get();
        //return $subAccesoDefinidos;
        return view($this->path.'.edit', compact('sRol','accesos','subAcceso','subAccesoDefinidos', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(subRolesRequest $request, $id)
    {
        $sRol_editar=Sub_rol::findOrFail($id);
        $sRol_editar->nombre_sub_rol     = $request->nombre_sub_rol;
        $sRol_editar->descripcion_sub_rol= $request->desc_sub_rol;
        $sRol_editar->id_rol= $request->rol_seleccionado;
        $sRol_editar->save();
        $sub_accesos=$request->permiso;
        $id_eliminar=Acceso_sub_rol::select('id')->where('id_sub_rol','=',$sRol_editar->id)->get();
        $sRol_editar->desc='Modifico el Registro: '.$sRol_editar->id.' con los sub_Acceso: '.$id_eliminar;
        $sRol_editar->action=13;
        event(new Sub_rolesEvent($sRol_editar));

            //return $id_eliminar;

        foreach($id_eliminar as $eliminar){
            $borrarAcceso= Acceso_sub_rol::findorfail($eliminar->id);
            $borrarAcceso->delete();
        }

        foreach($sub_accesos as $id_sub_acceso) 
        {
            $subAccesoModificado=new Acceso_sub_rol();
            $subAccesoModificado->id_sub_acceso = $id_sub_acceso;

            $subAccesoModificado->id_sub_rol =    $sRol_editar->id;
            $subAccesoModificado->save();
        $sRol_editar_bitacora=Sub_rol::findOrFail($id);
        // $sRol_editar_bitacora->subAcceso=$subAccesoModificado;
        // $sRol_editar->desc='Modifico el registro SubRol: '.$sRol_editar->id.' sub_rol: '.$sRol_editar->nombre_sub_rol;
        $sRol_editar_bitacora->desc='Modifico el Registro: '.$sRol_editar_bitacora->id.' con Sub_acceso: '.$subAccesoModificado->sub_accesos->nombre_sub_acceso;
        $sRol_editar_bitacora->action=13;
        event(new Sub_rolesEvent($sRol_editar_bitacora));
        }

        $notification = array('mensaje3' =>'sub Rol cambiado correctamente',
            'alert-type'=>'success');
        return redirect()->route($this->path.'.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            $sRolEliminar = Sub_rol::findOrFail($id);
            $sRolEliminar->desc='Elimino el registro SubRol: '.$sRolEliminar->id.' sub_rol: '.$sRolEliminar->nombre_sub_rol;
            $sRolEliminar->action=14;
            event(new Sub_rolesEvent($sRolEliminar));
            $sRolEliminar->delete(); 
            //return redirect()->route('rols.index');
            $notification = array('mensaje3' =>' Eliminado exitosamente !',
            'alert-type'=>'success');
            //return back()->with($notification);
            return redirect()->route($this->path.'.index')->with($notification);
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}
