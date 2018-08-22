<?php

namespace App\Listeners\Usuario;

use App\Events\Usuario\UsuarioNuevoBit;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class UsuarioNuevoRegistroBit
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
     * @param  UsuarioNuevoBit  $event
     * @return void
     */
    public function handle(UsuarioNuevoBit $event)
    {
        // dd($event);
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->user->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->user->action
        ]);

    }
}
