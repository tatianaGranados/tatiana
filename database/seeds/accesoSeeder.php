<?php
 
use Illuminate\Database\Seeder;

class accesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        App\Acceso::create([

        	'nombre_acceso' =>'Administracion Usuarios',
			'ruta_acceso' =>'usuarios.index',
			'descripcion_acceso' =>'Módulo principal que trabaja con la información principal de usuario, las opciones que puede utilizar se hayan en el menú superior o el de la parte izquierda.',
			'icono_acceso' =>'iconoMenuAdministracionUsuarios.png',
			'defecto_acceso' => 'NO',
			'peso_acceso' =>'40'
         ]);
        App\Acceso::create([

        	'nombre_acceso' =>'Administracion de Permisos',
			'ruta_acceso' =>'accesos.index',
			'descripcion_acceso' =>'Modulo donde se configura la asignacion de permisos a las diferentes funcionalidades del SISTEMA',
			'icono_acceso' =>'iconoMenuAdministracionGrupos.png',
			'defecto_acceso' =>'NO',
			'peso_acceso' =>'41'
         ]);

    }
}
