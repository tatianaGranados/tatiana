<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\RolesEvent' => [
            'App\Listeners\Rol\CrearRolBitacora',
        ],
        'App\Events\Sub_rolesEvent' => [
            'App\Listeners\Sub_rolListener',
        ],
        'App\Events\GestionEvent' => [
            'App\Listeners\GestionListener',
        ],
        'App\Events\Accesos\AccesosEvent' => [
            'App\Listeners\Accesos\AccesosListener',
        ],

        'App\Events\Auth\UsuarioLogueado'=>[
            'App\Listeners\Auth\RegistroIngresoSistema',
        ],
        'App\Events\Auth\UsuarioExit'=>[
            'App\Listeners\Auth\SalidaSistema',
        ],
        'App\Events\Usuario\UsuarioNuevoBit'=>[
            'App\Listeners\Usuario\UsuarioNuevoRegistroBit',
        ],

        'App\Events\Usuario\Informacion\TelefonoEvent'=>[
            'App\Listeners\Usuario\Informacion\TelefonoListener',
        ],
        'App\Events\Usuario\Informacion\EmailEvent'=>[
            'App\Listeners\Usuario\Informacion\EmailListener',
        ],
        'App\Events\Usuario\Informacion\DireccionEvent'=>[
            'App\Listeners\Usuario\Informacion\DireccionListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
