<?php

namespace App\Listeners;

use App\Events\Sub_rolesEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class Sub_rolListener
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
     * @param  Sub_rolesEvent  $event
     * @return void
     */
    public function handle(Sub_rolesEvent $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->sub_rol->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->sub_rol->action
        ]);
    }
}
