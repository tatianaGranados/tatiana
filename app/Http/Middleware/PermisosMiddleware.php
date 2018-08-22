<?php

namespace App\Http\Middleware;

use Closure;
use App\Sub_acceso; 
use Auth;
use Carbon\Carbon; 

class PermisosMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        $roles=Sub_acceso::join('acceso_sub_roles','acceso_sub_roles.id_sub_acceso','=','sub_accesos.id')
            ->join('sub_roles','sub_roles.id','=','acceso_sub_roles.id_sub_rol')
            ->join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_sub_rol','=','sub_roles.id')
            ->join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')
            ->where('usuarios.id',Auth::user()->id)
            ->where('usuario_asignar_sub_roles.activo','SI')
            ->where('usuario_asignar_sub_roles.fecha_fin','>',Carbon::now()->format('y-m-d'))
            ->where('sub_accesos.id',$role)
            ->select('sub_accesos.id','sub_accesos.nombre_sub_acceso')
            ->groupBy('sub_accesos.id', 'sub_accesos.nombre_sub_acceso')->get()->count();
        if($roles<=0)
//         \Auth::check() && \Auth::user()->role === $role )
        {
//            echo $role;
            return abort(403,"Acceso no Autorizado");
        }
        else
        {
            //echo "logueado con rol: ", $roles;
            return $next($request);
        }

    }
}
