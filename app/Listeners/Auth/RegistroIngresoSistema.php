<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UsuarioLogueado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class RegistroIngresoSistema
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UsuarioLogueado  $event
     * @return void
     */
    public function handle(UsuarioLogueado $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>'Ingreso al Sistema Admisión FCE',
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>1
        ]);
    }
}
