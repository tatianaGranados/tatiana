<?php
namespace App\Http\Controllers;

    set_time_limit(1000);
    ini_set('memory_limit','1024M');
use Illuminate\Http\Request;

use Excel;
use DB;
use App\Migrar_inscripcion;
use App\Migrar_estudiante;
use App\Materia;
use App\Unidad_materia;
use App\Usuario;
use App\Usuario_asignar_sub_rol;
use App\Usuario_titulo;
use App\Materia_plan_gestion_unidad;
use App\Grupo_doc_mat_plan_gestion_unidad;
use App\Grupo_materia_plan_gestion_unidad;
use App\Gestion;
use App\Plan;
use App\Plan_gestion_unidad;
use App\Inscripcion;
use App\Inscripcion_grupo_materia_plan_gestion_unidad;
use Carbon\Carbon; 
use Auth;
use App\Events\Usuario\UsuarioNuevoBit;
class ScriptController extends Controller
{
    // public function __construct() 
    // {

    // }
    public function subirScript()
    {
        // return "hola";
        $gestiones=Gestion::orderBy('anio','desc')->orderBy('id_tipo_gestion','desc')->get();
        $gestiones->each(function($gestiones){
         $gestiones->tipo_gestiones;
         $gestiones->plan_gestion_unidades;
     });
        // return $gestiones;
        return view('gestiones.subirScript',compact('gestiones'));
    }
    public function importarScript(Request $request)
    {
        // return $request->gestion;
        $fechaTitulo=Carbon::now()->format('y-m-d');
        $fechaFinRol=Carbon::now()->addYears(2)->format('y-m-d');
        $fechaInicioRol=$fechaTitulo;
    	$idSubRol=7;	//Sub_Rol docente
    	$idUnidad=7;//Direccion Academica
    	$idFuncion=1;//funcion Docente
        $idTitulo=10;
        $idSubGrupo=7;
        $idGestion=$request->gestion;

        if($request->hasFile('archivo'))
        {
            $path = $request->file('archivo')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count())
            {
                Migrar_inscripcion::truncate();
                foreach ($data as $key => $value) 
                {
                    $inscripcion = new Migrar_inscripcion();
                    $inscripcion->cod_estudiante = $value->cod_estudiante;
                    $inscripcion->ci= $value->ci;
                    $inscripcion->apellidos = $value->apellidos;
                    $inscripcion->nombres = $value->nombres;
                    $inscripcion->fecha_nac= $value->fecha_nac;
                    $inscripcion->sexo= $value->genero;
                    $inscripcion->cod_plan= $value->plangestion;
                    $inscripcion->nombre_plan= $value->nombreplan;
                    $inscripcion->nivelMat = $value->nivel;
                    $inscripcion->cod_materia = $value->materia;
                    $inscripcion->nombreMat = $value->nombremat;
                    $inscripcion->tipoMateria = $value->tipomateria;
                    $inscripcion->grupoMat= $value->grupo;
                    $inscripcion->codDocente = $value->docente;
                    $inscripcion->ciDoc = $value->cidoc;
                    $inscripcion->apellidosDocente = $value->apellidodocente;
                    $inscripcion->nombresDocente = $value->nombredocente;
                    $inscripcion->genero = $value->generodocente;
                    // return $value->fechanacdoc;
                        // return $inscripcion;
                    // $fechaVerificar=$value->fechanacdoc;
                    if($value->fechanacdoc!='NULL')
                        $inscripcion->fecha = $value->fechanacdoc;
                    // {
                    //     // return $inscripcion;
                    //     $fecha = $value->fechanacdoc;
                    // }else{
                    //     $fecha = '0000-11-08';
                    // }
                    // $fechaRegistro=$fecha;
                    $inscripcion->titulo = $value->titulodocente;
                    $inscripcion->save();                    
                }
                //correccion de la tabla migrar_inscripcion, niveles
                DB::table('migrar_inscripciones')->where('nivelMat','A')->update(['nivelMat'=>'1']);
                DB::table('migrar_inscripciones')->where('nivelMat','B')->update(['nivelMat'=>'2']);
                DB::table('migrar_inscripciones')->where('nivelMat','C')->update(['nivelMat'=>'3']);
                DB::table('migrar_inscripciones')->where('nivelMat','D')->update(['nivelMat'=>'4']);
                DB::table('migrar_inscripciones')->where('nivelMat','E')->update(['nivelMat'=>'5']);
                DB::table('migrar_inscripciones')->where('nivelMat','F')->update(['nivelMat'=>'6']);
                DB::table('migrar_inscripciones')->where('nivelMat','G')->update(['nivelMat'=>'7']);
                DB::table('migrar_inscripciones')->where('nivelMat','H')->update(['nivelMat'=>'8']);
                DB::table('migrar_inscripciones')->where('nivelMat','I')->update(['nivelMat'=>'9']);
                DB::table('migrar_inscripciones')->where('nivelMat','J')->update(['nivelMat'=>'10']);
                //para los cursos
                DB::table('migrar_inscripciones')->where('grupoMat','1')->update(['grupoMat'=>'01']);
                DB::table('migrar_inscripciones')->where('grupoMat','2')->update(['grupoMat'=>'02']);
                DB::table('migrar_inscripciones')->where('grupoMat','3')->update(['grupoMat'=>'03']);
                DB::table('migrar_inscripciones')->where('grupoMat','4')->update(['grupoMat'=>'04']);
                DB::table('migrar_inscripciones')->where('grupoMat','5')->update(['grupoMat'=>'05']);
                DB::table('migrar_inscripciones')->where('grupoMat','6')->update(['grupoMat'=>'06']);
                DB::table('migrar_inscripciones')->where('grupoMat','7')->update(['grupoMat'=>'07']);
                DB::table('migrar_inscripciones')->where('grupoMat','8')->update(['grupoMat'=>'08']);
                DB::table('migrar_inscripciones')->where('grupoMat','9')->update(['grupoMat'=>'09']);
                //actualizamos los planes
                DB::table('migrar_inscripciones')->where('cod_plan','89801')->update(['cod_plan'=>'089801']);
                DB::table('migrar_inscripciones')->where('cod_plan','59801')->update(['cod_plan'=>'059801']);
                //actualizar mesa o normal
                DB::table('migrar_inscripciones')->where('tipoMateria','N')->update(['tipoMateria'=>'1']);
                DB::table('migrar_inscripciones')->where('tipoMateria','E')->update(['tipoMateria'=>'2']);

                // Materias
                // *********************************************************
                // trabajamos con las materias, las nuevas las registramos en el sistema, debemos sacar del SIS  las materias
                $materias=Migrar_inscripcion::select('cod_materia','nombreMat')->groupBy('cod_materia','nombreMat')->get();
                foreach($materias as $rowAux)
                {
                    $resultAux=Materia::where('cod_materia',$rowAux->cod_materia)->get();
                    if(!$resultAux->isEmpty())
                    {
                        $idMat=$resultAux->first()->id;
                    }else{

                        $resultInsert=Materia::create([
                            'cod_materia'=>$rowAux->cod_materia,
                            'nombre_materia'=>$rowAux->nombreMat,
                            'nombre_corto'=>$rowAux->nombreMat,
                            'nombre_impresion'=>$rowAux->nombreMat
                        ]);
                        $idMat=Materia::all()->last()->id;
                    //debemos inserta en la unidad
                    }
                    // vemos si esta asignado a una unidad
                    $unidad=Unidad_materia::where('id_materia',$idMat)->get();
                    if($unidad->isEmpty())
                    {
                        $aux=floor($rowAux->cod_materia/1000);
                        switch ($aux) {
		                	 	case '1301'://Administracion
                              $unidadNueva=2;
                              break;
		                	 	case '1304'://Economia
                              $unidadNueva=1;
                              break;
		                	 	case '1302'://contaduria
                              $unidadNueva=3;
                              break;
                        }	
                          Unidad_materia::create(['id_unidad'=>$unidadNueva,'id_materia'=>$idMat]);
                    }
                }
                // ************************************************
                //$docenteMigrar es equivalente a $resultTrabajo
                  $docentesMigrar=Migrar_inscripcion::select('codDocente','ciDoc','apellidosDocente','nombresDocente','genero','fecha','titulo')->groupBy('codDocente','ciDoc','apellidosDocente','nombresDocente','genero','fecha','titulo')->get();
                    // return $docentesMigrar;
                  foreach($docentesMigrar as $rowAux)
                  {
                		// donde 3, es subrol de docente
                      $resultAux=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('id_sub_rol',$idSubRol)->select('usuario_asignar_sub_roles.id_sub_rol','usuario_asignar_sub_roles.fecha_inicio','fecha_fin','a.apellidos','a.nombres','a.doc_identidad','usuario_asignar_sub_roles.id_usuario')->where('cod_sis',$rowAux->codDocente)->get();
                        // return $resultAux;
                      if($resultAux->isEmpty())
                      {
                       echo $rowAux->codDocente." ".$rowAux->apellidosDocente."no esta en el sistema, tampoco tiene rol de docente:7";
                       $resultAux2=Usuario::where('doc_identidad',$rowAux->ciDoc)->get();
                       if(!$resultAux2->isEmpty())
                       {
                        $rowUsuario=$resultAux2->first();
                                //Verificar que tenga titulo distino de univ 4, sr 3, sra2, aux1
                        $resultVerif=Usuario_titulo::where('id_usuario',$rowUsuario->id)->whereNotIn('id_titulo',[1,2,3,4])->get();
                        if($resultVerif->isEmpty())
                        {
                					//tituloDocente, esta declarado 10, aun falta los datos reales
                         Usuario_titulo::create([
                          'id_usuario'=>$rowUsuario->id,
                          'id_titulo'=>$idTitulo,
                          'descripcion'=>'Titulo de Docente Registrado',
                          'fecha_titulo'=>$fechaTitulo
                      ]);
                     }
                     //ahora debemos asignarle un rol de usuarios
                     $resultVerif=Usuario_asignar_sub_rol::where('id_usuario',$rowUsuario->id)->where('id_sub_rol',$idSubRol)->where('id_funcion',$idFuncion)->where('id_unidad',$idUnidad)->get();
                                // return $resultVerif;
                     if($resultVerif->isEmpty())
                     {
                         $resultInsert=Usuario_asignar_sub_rol::create([
                          'id_usuario'=>$rowUsuario->id,
                          'id_sub_rol'=>$idSubRol,
                          'cod_sis'=>$rowAux->codDocente,
                          'id_funcion'=>$idFuncion,
                          'id_unidad'=>$idUnidad,
                          'fecha_inicio'=>$fechaInicioRol,
                          'fecha_fin'=>$fechaFinRol,
                          'activo'=>'SI'
                        ]);
                         $idSubGrupo=Usuario_asignar_sub_rol::all()->last()->id;
                                    // return "hola";
                     }else
                     {
                                    // $rowSubGrupo=$resultVerif;
                        $idSubGrupo=$resultVerif->first()->id;
                                    // return "hola2";
                    }
                                // return "probando".$idSubGrupo;
                }else
                {
                    echo "no esta en el sistema, entonces lo registramos<br>";
                    if($rowAux->genero=='M' || is_null($rowAux->genero))
                    {
                        $generoDocente="MASCULINO";
                    }
                    else{
                        $generoDocente="FEMENINO";
                    }                                
                    $resultInsert=new Usuario();
                    $resultInsert->doc_identidad=$rowAux->ciDoc;
                    $resultInsert->login=$rowAux->ciDoc;
                    $resultInsert->clave=bcrypt($rowAux->ciDoc);
                    $resultInsert->apellidos=$rowAux->apellidosDocente;
                    $resultInsert->nombres=$rowAux->nombresDocente;
                    $resultInsert->sexo="MASCULINO";
                    $resultInsert->fecha_nac=$rowAux->fecha;
                    $resultInsert->save();
                                // return $resultInsert;
                                //insertamso su titulo
                    $ultimo=Usuario::all();
                                // return $ultimo->last()->id;
                    Usuario_titulo::create([
                        'id_usuario'=>$ultimo->last()->id,
                        'id_titulo'=>$idTitulo,
                        'fecha_titulo'=>$fechaTitulo
                    ]);
                    Usuario_asignar_sub_rol::create([
                        'id_usuario'=>$ultimo->last()->id,
                        'id_sub_rol'=>$idSubGrupo,
                        'cod_sis'=>$rowAux->codDocente,
                        'id_funcion'=>$idFuncion,
                        'id_unidad'=>$idUnidad,
                        'fecha_inicio'=>$fechaInicioRol,
                        'fecha_fin'=>$fechaFinRol,
                        'activo'=>'SI'
                    ]);
                                // return $resultInsert;
                }   
            }else
            {
                $rowAux2=$resultAux->first();
                            // return $rowAux2->id_usuario;
                if($rowAux->genero=="M")
                {
                    $sexoAux="MASCULINO";
                }else
                if($rowAux->genero=="F")
                {
                    $sexoAux="FEMENINO";
                }
                else
                    $sexoAux="MASCULINO";
                $resultUpdate=Usuario::where('id',$rowAux2->id_usuario)->first();
                $resultUpdate->apellidos=$rowAux->apellidosDocente;
                $resultUpdate->nombres=$rowAux->nombresDocente;
                $resultUpdate->sexo=$sexoAux;
                $resultUpdate->fecha_nac=$rowAux->fecha;
                            // return $resultUpdate;
                $resultUpdate->save();

            }//fin Docente en el sistema

        }   //fin del ciclo docente
        //***************************************************************************
        //****************************************************************************

                // sacar el ultimo IDAGRUPAR por si acaso para trabajar
        $idAgruparMaterias=Grupo_materia_plan_gestion_unidad::max('id_agrupar_materias');
        // tenemos que verificar que para el plan la materia, el grupo y docente este en la base de datos
        $resultListaGrupos=Migrar_inscripcion::select('cod_plan','cod_materia','tipoMateria','grupoMat','codDocente','nivelMat')->groupBy('cod_plan','cod_materia','tipoMateria','grupoMat','codDocente','nivelMat')->get();
                // return $resultListaGrupos;
        foreach ($resultListaGrupos as $rowGrupos) {
                    //consultar si esa informacion ya esta registrada en el sistema
            $resultConsulta = DB::table('vista_doc_mat_plan_gestion')->where([['cod_sis',$rowGrupos->cod_docente],['cod_grupo',$rowGrupos->grupoMat],['cod_materia',$rowGrupos->cod_materia],['cod_plan',$rowGrupos->cod_plan],['id_tipo_planilla',$rowGrupos->tipoMateria],['id_gestion',$idGestion]])->get();
                    // sino esta registrada toda esta informacion
            if($resultConsulta->isEmpty())
            {
                        //necesitamos el id_plan_gestion_unidad
                $rowPlan=Plan::join('plan_gestion_unidades as b','planes.id','=','b.id_plan')->where('b.id_gestion',$idGestion)->where('planes.cod_plan',$rowGrupos->cod_plan)->select('b.id as id_plan_gestion_unidad')->first();
                        //sacamos la materia
                $rowMateria=Materia::join('unidad_materias as a','a.id_materia','=','materias.id')->where('cod_materia',$rowGrupos->cod_materia)->select('a.id as id_unidad_materia')->first();
                //verificamos si existe la materia en el plan_gestion_unidad, se registra sino existe y se manteniene si existe

                //TRABAJO CON MATERIA
                // Consultatmos si el registro de la materia para el plan esta en la base de datos
                $resultConsulta=Materia_plan_gestion_unidad::where([['id_plan_gestion_unidad',$rowPlan->id_plan_gestion_unidad],['id_unidad_materia',$rowMateria->id_unidad_materia]])->select('id')->get();
                if($resultConsulta->isEmpty())
                {
                    Materia_plan_gestion_unidad::create([
                        'porcentaje'=>100,
                        'nivel'=>$rowGrupos->nivelMat,
                                // 'id_plan_gestion_unidad'=>$idPrueba,
                        'id_plan_gestion_unidad'=>$rowPlan->id_plan_gestion_unidad,
                        'id_unidad_materia'=>$rowMateria->id_unidad_materia,
                        'plan_global'=>'',
                        'version'=>''
                    ]);
                    $idMatPlanGestion=Materia_plan_gestion_unidad::all()->last()->id;
                }
                else{
                    $idMatPlanGestion=$resultConsulta->first()->id;
                }//fin de materia en la BD
                // return $idMatPlanGestion;   
                $resultVerificar2=Grupo_materia_plan_gestion_unidad::where('id_mat_plan_gestion_unidad',$idMatPlanGestion)->where('cod_grupo',$rowGrupos->grupoMat)->where('id_tipo_planilla',$rowGrupos->tipoMateria)->select('id as id_grupo_materia_plan_gestion_unid','id_agrupar_materias')->get();
                if($resultVerificar2->isEmpty())
                {
                    $idAgruparMaterias++;
                    // return $idMatPlanGestion." grupo ".$rowGrupos->grupoMat." idAgruparMaterias   ".$idAgruparMaterias;
                    $resultInsert=Grupo_materia_plan_gestion_unidad::create([
                        'cod_grupo'=>$rowGrupos->grupoMat,
                        'id_mat_plan_gestion_unidad'=>$idMatPlanGestion,
                        'id_agrupar_materias'=>$idAgruparMaterias,
                        'id_tipo_planilla'=>$rowGrupos->tipoMateria
                    ]);
                    $idCapturadoAgrupar=$idAgruparMaterias;
                            // echo $idAgruparMaterias;
                }else{
                    $idCapturadoAgrupar=$resultVerificar2->first()->id_agrupar_materias;
                }
                        //le asignamos el docente
                        //despues de terminar esta seccion atenemos el nuevo id para trabajar e insertar la info del docente
                        //lo buscamos solo como docente no como auxiliar
                $resultDocente=Usuario_asignar_sub_rol::where('id_sub_rol',$idSubRol)->where('cod_sis',$rowGrupos->codDocente)->select('id')->get();
                        //verificamos si fue asignado otro docente
                $resultVerificar=Grupo_doc_mat_plan_gestion_unidad::join('usuario_asignar_sub_roles as b','b.id','=','grupo_doc_mat_plan_gestion_unidades.id_usuario_asignar_sub_rol')->where([['id_agrupar_materias',$idCapturadoAgrupar],['b.id',$idSubRol]])->get();
                if($resultVerificar->isEmpty())
                {
                    echo "insertar Docente";
                    $resultInsert=Grupo_doc_mat_plan_gestion_unidad::create([
                        'id_usuario_asignar_sub_rol'=>$resultDocente->first()->id,
                        'id_agrupar_materias'=>$idAgruparMaterias,
                        'id_tipo_planilla'=>$rowGrupos->tipoMateria,
                        'fecha_inicio_doc'=>Carbon::now()->format('y-m-d'),
                        'fecha_fin_doc'=>Carbon::now()->addMonth(5)->format('y-m-d')

                    ]);
                }else{
                            //si existe docente, solo se actualiza cambiando el docente
                    $rowAuxGrupo=$resultVerificar->first();
                    echo "hay docente, solo actualizamos<br>";
                    $resultInsert=Grupo_doc_mat_plan_gestion_unidad::where('id',$rowAuxGrupo->id)->update(['id_usuario_asignar_sub_rol'=>$resultDocente->first()->id]);
                }
                    }//fin del if sie sta en la base de datos

                }
                //verificamos que todos los estudintes esten habilitados
                $resultEstudiante=Migrar_inscripcion::select('cod_estudiante','ci','apellidos','nombres','fecha_nac','sexo','cod_plan','nombre_plan','nivelMat','cod_materia','nombreMat','tipoMateria','grupoMat')->groupBy('cod_estudiante','ci','apellidos','nombres','fecha_nac','sexo','cod_plan','nombre_plan','nivelMat','cod_materia','nombreMat','tipoMateria','grupoMat')->orderBy('apellidos','desc')->orderBy('nombres','desc')->get();
                // $resultEstudiante=Migrar_inscripcion::select('cod_estudiante','ci','apellidos','nombres','fecha_nac','sexo','cod_plan','nombre_plan','nivelMat','cod_materia','nombreMat','tipoMateria','grupoMat')->groupBy('cod_estudiante','ci','apellidos','nombres','fecha_nac','sexo','cod_plan','nombre_plan','nivelMat','cod_materia','nombreMat','tipoMateria','grupoMat')->orderBy('apellidos','desc')->orderBy('nombres','desc')->limit(10000,10000)->get();
                // return $items;
                foreach($resultEstudiante as $rowEstudiante)
                {
                    $resultVerificar=DB::table('vista_inscripcion')->where('cod_sis',$rowEstudiante->cod_estudiante)->where('activa_ins','SI')->where('id_gestion',$idGestion)->where('cod_plan',$rowEstudiante->cod_plan)->get();
                    if($resultVerificar->isEmpty())
                    {
                        echo "cod_estudiante:".$rowEstudiante->cod_estudiante."ci est: ".$rowEstudiante->ci."no<br>";
                    }
                }//fin foreach estudiante

                $estudiantesMigrar=Migrar_inscripcion::groupBy('cod_estudiante','ci','nombres','apellidos','cod_plan','fecha_nac','sexo')->select('cod_estudiante','ci','nombres','apellidos','cod_plan','fecha_nac','sexo')->get();
                Migrar_estudiante::truncate();
                foreach ($estudiantesMigrar as $migrar) {
                    Migrar_estudiante::create([
                        'codigo'=>$migrar->cod_estudiante,
                        'ci'=>$migrar->ci,
                        'nombres'=>$migrar->nombres,
                        'apellidos'=>$migrar->apellidos,
                        'plan'=>$migrar->cod_plan,
                        'fecha'=>$migrar->fecha_nac,
                        'sexo'=>$migrar->sexo,
                        'inscrito'=>"NO"
                    ]);
                }
                $resultAux=Migrar_estudiante::where('inscrito','NO')->orderBy('nombres','desc')->orderBy('apellidos','desc')->get();
                // return $resultAux." el resultado de migrar Estudiante";                
                foreach ($resultAux as $rowDatosUsuario) {
                    //UNIDAD 7 dir acad, sub rol 11 estudiante pregrado, funcion 
                    // $resultAux2=Usuario::join('usuario_asignar_sub_roles b','b.id_usuario','=','usuarios.id')->where([['b.id_sub_rol',11],['b.id_unidad',7],['b.cod_sis',$rowDatosUsuario->codigo]])->get();
                    // return $resultAux2;
                    //con el ci del la persona
                    $resultAux2=Usuario::where('doc_identidad',$rowDatosUsuario->ci)->select('id','doc_identidad','apellidos','nombres')->get();
                    // return $resultAux2."lizzzzzzzzzzzzz estas por la parte de inscripcion";
                    if(!$resultAux2->isEmpty())
                    {
                        echo "<strong>se encontro a ".$rowDatosUsuario->ci." apellidos".$rowDatosUsuario->apellidos." nombres".$rowDatosUsuario->nombres."</strong>";
                        $rowUsuario=$resultAux2->first();
                        //si se encuentra al estudiante, se debe realizar 3 cosas
                        
                        $resultActualizar=DB::table('migrar_estudiantes')->where([['codigo',$rowDatosUsuario->codigo],['plan',$rowDatosUsuario->plan]])->update(['inscrito'=>'SI']);      
                        // DB::table('migrar_inscripciones')->where('nivelMat','G')->update(['nivelMat'=>'7']);
                        $resultUpdate=DB::table('usuarios')->where('id',$rowUsuario->id)->update(array('login'=>$rowDatosUsuario->ci,'clave'=>bcrypt($rowDatosUsuario->ci),'apellidos'=>$rowDatosUsuario->apellidos,'nombres'=>$rowDatosUsuario->nombres,'fecha_nac'=>$rowDatosUsuario->fecha,'usuario_activo'=>'SI'));
                        
                        //2. verificamos su titulo de Universitario = 4
                        $resultVerify=Usuario_titulo::where('id_usuario',$rowUsuario->id)->where('id_titulo',4)->get();
                        if($resultVerify->isEmpty())
                        {
                            $resultInsert=Usuario_titulo::create([
                                'id_usuario'=>$rowUsuario->id,
                                'id_titulo'=>4,
                                'fecha_titulo'=>$fechaTitulo
                            ]);
                        }
                        //3 como es primera vez, verificamos y creamos su rol de estudiantes universitario
                        //se le debe asignar su rol de usuario
                        //verificamos q si ya le registramos el subRol que debemos colocarle
                        //subRol 11, estudiante Pregrado
                        //falta la funcion de Estudiante 6
                        //unidad 7 direccion Academica o Unidad 20 PROMEC->sacad
                        // return "<br>".$rowUsuario->id." este es el id del usuario que estamos insertando subroles";
                        $resultVerif=Usuario_asignar_sub_rol::where('id_usuario',$rowUsuario->id)->where('id_sub_rol',11)->where('id_funcion',7)->where('id_unidad',7)->get();
                        if($resultVerif->isEmpty())
                        {
                            $resultInset=Usuario_asignar_sub_rol::create([
                                'id_usuario'=>$rowUsuario->id,
                                'id_sub_rol'=>11,
                                'cod_sis'=>$rowDatosUsuario->codigo,
                                'id_funcion'=>7,
                                'id_unidad'=>7,
                                'fecha_inicio'=>$fechaInicioRol,
                                'fecha_fin'=>$fechaFinRol,
                                'activo'=>'SI'
                            ]);
                            $idSubGrupo=Usuario_asignar_sub_rol::all()->last()->id;
                        }else{
                            $rowSubGrupo=$resultVerif->first();
                            $idSubGrupo=$rowSubGrupo->id;
                        }
                        //debemos inscribirlo a su plan correspondiente para la gestion actual
                        // necesitamos el plan_gestion_unid
                        $rowAuxPlan=Plan_gestion_unidad::join('planes','planes.id','=','plan_gestion_unidades.id_plan')->where('planes.cod_plan',$rowDatosUsuario->plan)->select('plan_gestion_unidades.id')->first();
                        //verificamos si ya lo inscribimos a su plan
                        $resultVerif=Inscripcion::where([['id_usuario_asignar_sub_rol',$idSubGrupo],['id_plan_gestion_unidad',$rowAuxPlan->id],['ins_activo','SI']])->select('id')->get();
                        if($resultVerif->isEmpty())
                        {
                            //insertamos el registro de inscripcion
                            $resultInsert=Inscripcion::create([
                                'id_usuario_asignar_sub_rol'=>$idSubGrupo,
                                'id_plan_gestion_unidad'=>$rowAuxPlan->id,
                                'ins_activo'=>'SI'
                            ]);
                        }
                        // sino esta con codigo sis o carnet lo registramos de nuevo
                    }else{
                        // echo "no esta en el sistema";
                        //sino existe usuario debemos registrar todos su datos en el sistema
                        $resultInsert=Usuario::create([
                            'doc_identidad'=>$rowDatosUsuario->ci,
                            'login'=>$rowDatosUsuario->codigo,
                            'clave'=>bcrypt($rowDatosUsuario->ci),
                            'apellidos'=>$rowDatosUsuario->apellidos,
                            'nombres'=>$rowDatosUsuario->nombres,
                            'sexo'=>$rowDatosUsuario->sexo,
                            'fecha_nac'=>$rowDatosUsuario->fecha
                        ]);
                        //necesitamos el id para lo demas
                        $idUsuario=Usuario::all()->last()->id;
                        // return $resultInsert;
                        // return $idUsuario."estamos por aki";
                        //registramos su titulo
                        //itulo de Universitario 4
                        Usuario_titulo::create([
                            'id_usuario'=>$idUsuario,
                            'id_titulo'=>4,
                            'fecha_titulo'=>$fechaTitulo
                        ]);
                        $resultInsert=Usuario_asignar_sub_rol::create([
                            'id_usuario'=>$idUsuario,
                            'id_sub_rol'=>11,  //estudiante pregrado
                            'cod_sis'=>$rowDatosUsuario->codigo,
                            'id_funcion'=>8,  //funcion Estudiante
                            'id_unidad'=>7,
                            'fecha_inicio'=>$fechaInicioRol,
                            'fecha_fin'=>$fechaFinRol,
                            'activo'=>'SI'
                        ]);
                        $idSubGrupo=Usuario_asignar_sub_rol::all()->last()->id;
                        // return $idSubGrupo;
                        // necesitamos el plan_gestion_unidad
                        $rowAuxPlan=Plan_gestion_unidad::join('planes','planes.id','=','plan_gestion_unidades.id_plan')->where('planes.cod_plan',$rowDatosUsuario->plan)->select('plan_gestion_unidades.id')->first();
                        //insertamos el registro de inscripcion
                        $resultInsert=Inscripcion::create([
                            'id_usuario_asignar_sub_rol'=>$idSubGrupo,
                            'id_plan_gestion_unidad'=>$rowAuxPlan->id,
                            'ins_activo'=>'SI'
                        ]);
                        // bloqueamos
                        // si encontramos al estudiante debemos hacer 3 cosas
                        // $resultActualizar=DB::table('migrar_estudiantes')->where([['codigo',$rowDatosUsuario->codigo],['plan',$rowDatosUsuario->plan]])->update(['inscrito'=>'SI']);
                    }

                }




                //bloqueamos todas las inscripcion
                $resultVerificar=DB::table('vista_usr_ins_grupos')->where('id_gestion',$idGestion)->select('id_ins_grupo')->get();
                foreach($resultVerificar as $rowAux)
                {
                    // DB::table('migrar_inscripciones')->where('nivelMat','J')->update(['nivelMat'=>'10']);
                    DB::table('inscripcion_grupo_materia_plan_gestion_unidades')->where('id',$rowAux->id_ins_grupo)->update(['tipo_ins_grupo'=>0]);   
                }
                //tipo_ins_grupo=0 no inscrito,1 oficial, 2 docente
                //actualizamos o regitramos las inscripciones
                $i=100000;
                $resultInscribir=DB::table('migrar_inscripciones')->get();
                // $resultInscribir=DB::table('migrar_inscripciones')->limit($i,20000)->get();
                foreach($resultInscribir as $rowEstudiante)
                {
                    // echo "<strong>$i</strong>";
                    $resultAux=DB::table('vista_inscripcion')->where([['cod_sis',$rowEstudiante->cod_estudiante],['activa_ins','SI'],['id_gestion',$idGestion],['cod_plan',$rowEstudiante->cod_plan]])->select('id_inscripcion')->get();
                    // echo "<br>";
                    $rowIdIns=$resultAux->first();
                    //el otro campo
                    //idGrupoMatPlan gestion unidad
                    $resultAux=DB::table('vista_doc_mat_plan_gestion')->where([['cod_grupo',$rowEstudiante->grupoMat],['cod_materia',$rowEstudiante->cod_materia],['cod_plan',$rowEstudiante->cod_plan],['id_tipo_planilla',$rowEstudiante->tipoMateria],['id_gestion',$idGestion]])->select('id_grupo_materia_plan_gestion_unidad')->get();
                    $rowIdG=$resultAux->first();
                    // return $resultAux."zethlyyyyyyy";
                    if(!$resultAux->isEmpty())
                    {

                        // return "llegaste antes del metodos de inscripcion metodo de inscripcio grupo materia plan gestion unidad";
                        $this->inscribirEstudianteMateria($rowIdIns->id_inscripcion,$rowIdG->id_grupo_materia_plan_gestion_unidad,1);
                        // $this->inscribirEstudianteMateria($rowIdIns[0],$rowIdG[0],1);
                    }else{
                        echo "<strong>no existe el grupo creado plan:".$rowEstudiante->cod_plan." materia".$rowEstudiante->cod_materia." nombreMateria".$rowEstudiante->nombreMat."grupoMat".$rowEstudiante->grupoMat."</strong>";
                    }
                }
                echo "<strong><font color=#990000 size=7 face=Verdana, Arial, Helvetica, sans-serif>TERMINADO EL TRABAJITO</font></strong>";
                $permisoUsuario_mod=Auth::user();
                $permisoUsuario_mod->desc='Subio un Archivo CSV con estudiantes egresados';
                $permisoUsuario_mod->action=28;
                event(new UsuarioNuevoBit($permisoUsuario_mod));
            }

        }
        else
        {
            dd('Request data does not have any files to import.');     
        }
    }
    protected function inscribirEstudianteMateria($idInscripcion,$idGrupoMateriaPlanGestionUnid,$estado)
    {
        // return "llegaste al metodos de inscripcio grupo materia plan gestion unidad";
        //si la inscripcion esta en el sistema actualizamos su estado
     $resultadoConsulta=Inscripcion_grupo_materia_plan_gestion_unidad::where([['id_inscripcion',$idInscripcion],['id_grupo_materia_plan_gestion_unidad',$idGrupoMateriaPlanGestionUnid]])->select('id')->get();
       // return $resultadoConsulta."inscripcion de grupo materia plan gestion unidad";
     if($resultadoConsulta->isEmpty())
     {
        //insertamos
            // return "para insertar una nueva inscripcion de grupo materia plan gestion unidad".$idGrupoMateriaPlanGestionUnid;
        $resultadoConsultaAux=Inscripcion_grupo_materia_plan_gestion_unidad::create([
            'id_inscripcion'=>$idInscripcion,
            'id_grupo_materia_plan_gestion_unidad'=>$idGrupoMateriaPlanGestionUnid,
            'tipo_ins_grupo'=>$estado
        ]);
        $idInsGrupo=Inscripcion_grupo_materia_plan_gestion_unidad::all()->last()->id;
    }
    else
    {
        $rowAux=$resultadoConsulta->first();
        $idInsGrupo=$rowAux->id;
            //actualizamos
            // return $idInsGrupo;
        $resultadoConsultaAux=DB::table('inscripcion_grupo_materia_plan_gestion_unidades')->where([['id_grupo_materia_plan_gestion_unidad',$idGrupoMateriaPlanGestionUnid],['id_inscripcion',$idInscripcion]])->update(['tipo_ins_grupo'=>$estado]);
    }

    return $idInsGrupo;
    }
}
