<?php

namespace App\Listeners\Usuario\Informacion;

use App\Events\Usuario\Informacion\TelefonoEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class TelefonoListener
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
     * @param  TelefonoEvent  $event
     * @return void
     */
    public function handle(TelefonoEvent $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->usuario_telefono->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->usuario_telefono->action
        ]);
    }
}
