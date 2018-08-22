<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use DB;
use App\Plan_gestion_unidad;
use App\Gestion;
use App\Tipo_gestion;
use App\Plan;
use Carbon\Carbon;
use Excel;
use App\Http\Requests\Gestiones;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;//tati contraseña
use Illuminate\Support\Facades\Redirect;//tati contraseña
use App\Events\GestionEvent;
class GestionesController extends Controller
{
	private $path ='gestiones';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$gestiones= Gestion::orderBy('anio','desc')->get();
		$gestiones->each(function($gestiones){
			$gestiones->tipo_gestiones;
			$gestiones->plan_gestion_unidades;
		});
		return view($this->path.'.listaGestiones',compact('gestiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$planes=Plan::all();
    	$tipo_gestiones=Tipo_gestion::all();
    	$fecha=Carbon::now();
        return view($this->path.'.crearGestion',compact('tipo_gestiones','planes','fecha'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Gestiones $request)
    {
        try
        {
            $gestion=new Gestion();
            $gestion->anio=$request->anio;
            $gestion->periodo=$request->periodo;
            $gestion->fecha_inicio=$request->fecha_inicio;
            $gestion->fecha_fin=$request->fecha_fin;
            $gestion->activo="SI";
            $gestion->peso_gestion=2;
            $gestion->id_tipo_gestion=$request->tipo_gestion;

            $gestion->save();
            $planSeleccionado=$request->plan;
            // return $planSeleccionado;
            $plan=Plan::all();
           foreach($plan as $carreras)
            {
                if(is_array($planSeleccionado))
                {
                        $plan_gestion=new Plan_gestion_unidad();
                        $plan_gestion->id_gestion=$gestion->id;
                        $plan_gestion->id_plan=$carreras->id;
                        $plan_gestion->id_unidad=1;
                        if(in_array($carreras->id,$planSeleccionado))  
                            $plan_gestion->activo="SI";
                        else
                            $plan_gestion->activo="NO";
                        // endif
                    // endforeach
                    $plan_gestion->save();
            $gestion=Gestion::all()->last();
            // $gestion->plan_gestion=$plan_gestion;
            $gestion->desc='Id del Nuevo Registro: '.$gestion->id.' con el plan_gestion: '.$plan_gestion->planes->nombre_plan.' Plan_Activo: '.$plan_gestion->activo;
            $gestion->action=6;
            event(new GestionEvent($gestion));
                }
            }
            // return $gestion;
            return redirect()->route($this->path.'.index')->with('mensaje3','Gestion Creada con Exito');
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
        return $request;
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
        $gestionModificar=Gestion::findorfail($id);
        $planes=Plan::join('plan_gestion_unidades','plan_gestion_unidades.id_plan','=','planes.id')->where('plan_gestion_unidades.id_gestion',$id)->select('planes.nombre_plan','planes.cod_plan','plan_gestion_unidades.activo','planes.id')->get();
        $tipo_gestiones=Tipo_gestion::all();
        $gestionModificar->each(function($gestionModificar){
            $gestionModificar->tipo_gestiones;
            $gestionModificar->plan_gestion_unidades;
            // $gestionModificar->plan_gestion_unidades->planes;
        });
        // return $gestionModificar;
        $fecha=Carbon::now();
        return view($this->path.'.modificarGestion',compact('gestionModificar','tipo_gestiones','planes','fecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Gestiones $request, $id)
    {
        $gestionModif=Gestion::findorfail($id);
        $gestionModif->periodo=$request->periodo;
        
        $gestionModif->fecha_inicio=$request->fecha_inicio;
        $gestionModif->fecha_fin=$request->fecha_fin;
        $gestionModif->id_tipo_gestion=$request->tipo_gestion;
        $gestionModif->save();
        $gestionModif->desc='Registro Modificado: '.$gestionModif->id;
        $gestionModif->action=7;
        event(new GestionEvent($gestionModif));
        $planModificar=Plan_gestion_unidad::where('id_gestion','=',$gestionModif->id)->get();
        $planes=$request->plan;
        foreach($planModificar as $plan)
        {
        // return $plan;
            if(in_array($plan->id_plan,$planes))
            {
                $plan->activo='SI';
                $gestionModif->desc='Registro Modificado: '.$gestionModif->id.' Plan_Gestion_Activo: '.$plan->activo;
                $gestionModif->action=7;
                event(new GestionEvent($gestionModif));
            }
            else
            {
                $plan->activo='NO';
                $gestionModif->desc='Registro Modificado: '.$gestionModif->id.' Plan_Gestion_Activo: '.$plan->activo;
                $gestionModif->action=7;
                event(new GestionEvent($gestionModif));
            }
            $plan->save();
            // $gestionModif=Gestion::findorfail($id);
            // $gestionModif->plan_gestion=$plan;
        
        }
        return redirect()->route($this->path.'.index');
        // return $gestionModificar;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $gestionEliminar = Gestion::findOrFail($id);
            $gestionEliminar->desc='Id del Registro Gestion Eliminado: '.$gestionEliminar->id;
            $gestionEliminar->action=8;
            event(new GestionEvent($gestionEliminar));
            $gestionEliminar->delete();
            return redirect()->route($this->path.'.index');
        } catch(Exception $e){
            return "Fatal Error - ".$e->getMessage();
        }
    }
    public function modActivo($id)
    {   
            $modActivo = Gestion::findOrFail($id);
            if ($modActivo->activo=='SI') {
                $modActivo->activo='NO';
            }else{
                $modActivo->activo='SI';
            }
            $modActivo->save();
            $modActivo->desc='Registro Modificado: '.$modActivo->id.' Gestion_Activo: '.$modActivo->activo;
            $modActivo->action=7;
            event(new GestionEvent($modActivo));
        
            return redirect()->route('gestiones.index');
    }

}
