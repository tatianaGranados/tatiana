<?php

namespace App\Listeners\Rol;

use App\Events\RolesEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class CrearRolBitacora
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
     * @param  RolesEvent  $event
     * @return void
     */
    public function handle(RolesEvent $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->rol->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->rol->action
        ]);
        // dd($event);
    }
}
