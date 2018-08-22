<?php

namespace App\Listeners\Usuario\Informacion;

use App\Events\Usuario\Informacion\EmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bitacora;
use Carbon\carbon;
use Auth;
class EmailListener
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
     * @param  EmailEvent  $event
     * @return void
     */
    public function handle(EmailEvent $event)
    {
        Bitacora::create([
            'ip'=>\Request::ip(),
            'desc_operacion'=>$event->usuario_email->desc,
            'fecha_bitacora'=>Carbon::now(),
            'id_usuario'=>Auth::user()->id,
            'id_tipo_op_bitacora'=>$event->usuario_email->action
        ]);
    }
}
