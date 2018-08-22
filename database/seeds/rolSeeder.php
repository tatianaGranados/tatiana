<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Rol::create([

        	'nombre_rol' => 'ADMINISTRADOR DEL SISTEMA',
			'descripcion_rol' => ''
         ]);

        App\Rol::create([

        	'nombre_rol' => 'ADMINISTRATIVO',
			'descripcion_rol' => 'PERSONAL ADMINISTRATIVO'
         ]);

        App\Rol::create([

        	'nombre_rol' => 'ACADEMICO',
			'descripcion_rol' => 'PERSONAL DOCENTE'
         ]);

        App\Rol::create([

        	'nombre_rol' => 'ESTUDIANTE',
			'descripcion_rol' => 'ESTUDIANTES FCE'
         ]);

        App\Rol::create([

        	'nombre_rol' => 'VISITANTES',
			'descripcion_rol' => 'PERSONAL VISITANTE FCE'
         ]);

    }
}
