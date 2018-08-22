<?php

namespace App\Listeners\Usuario\Informacion;

use App\Events\Usuario\Informacion\DireccionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class DireccionListener
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
     * @param  DireccionEvent  $event
     * @return void
     */
    public function handle(DireccionEvent $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->usuario_direccion->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->usuario_direccion->action
        ]);
    }
}
