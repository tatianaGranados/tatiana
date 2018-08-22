<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Sub_acceso; 
use App\Acceso; 
use App\Usuario_asignar_sub_rol; 
use Carbon\Carbon; 
use Auth;
class MenuDinamicoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.navegacion',function($view)
        {
            $subAccesosUsuario=Sub_acceso::join('acceso_sub_roles','acceso_sub_roles.id_sub_acceso','=','sub_accesos.id')
            ->join('sub_roles','sub_roles.id','=','acceso_sub_roles.id_sub_rol')
            ->join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_sub_rol','=','sub_roles.id')
            ->join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')
            ->where('usuarios.id','=',Auth::user()->id)
            ->where('usuario_asignar_sub_roles.activo','SI')
            ->where('usuario_asignar_sub_roles.fecha_fin','>',Carbon::now()->format('y-m-d'))
            ->select('sub_accesos.id','sub_accesos.nombre_sub_acceso','sub_accesos.id_acceso','sub_accesos.ruta_sub_acceso')
            ->groupBy('sub_accesos.id', 'sub_accesos.nombre_sub_acceso','sub_accesos.ruta_sub_acceso')->get();
            
            $acceso = Acceso::whereIn('id',function($query){
                $query->select('sub_accesos.id_acceso')
                ->from('sub_accesos')
                ->join('acceso_sub_roles as a','a.id_sub_acceso','=','sub_accesos.id' )
                ->join('sub_roles','sub_roles.id','=','a.id_sub_rol')
                ->join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_sub_rol','=','sub_roles.id')
                ->join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')
                ->where('usuarios.id',Auth::user()->id)
                ->where('usuario_asignar_sub_roles.activo','SI')
                ->where('usuario_asignar_sub_roles.fecha_fin','>',Carbon::now()->format('y-m-d'))
                ->groupBy('sub_accesos.id_acceso');
            })->orderBy('peso_acceso','asc')
            ->get();
            $usuarioLogueado=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('a.id',Auth::user()->id)->first();
            $usuarioLogueado->each(function($usuarioLogueado){
            $usuarioLogueado->sub_rol;
            $usuarioLogueado->funcion;
            $usuarioLogueado->unidad;
            });
            $view->with('subAccesosUsuario', $subAccesosUsuario)->with('acceso',$acceso)->with('usuarioLogueado',$usuarioLogueado);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
