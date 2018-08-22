<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UsuarioExit;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class SalidaSistema
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
     * @param  UsuarioExit  $event
     * @return void
     */
    public function handle(UsuarioExit $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>'Finalizó su trabajo dentro el sistema Sistema Admisión FCE',
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>2
        ]);
    }
}
