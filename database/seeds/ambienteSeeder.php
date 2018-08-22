<?php

use Illuminate\Database\Seeder;

class ambienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Ambiente::create([

        	'nombre_ambiente'=>'AUDITORIO RAMIRO PEREZ',
			'max_estudiantes'=>'700',
			'ambiente_activo'=>'SI',
			'id_unidad'=>'7',
			'id_tipo_ambiente'=>'2'
        ]);

        App\Ambiente::create([

        	'nombre_ambiente'=>'AMAUTA',
			'max_estudiantes'=>'40',
			'ambiente_activo'=>'SI',
			'id_unidad'=>'7',
			'id_tipo_ambiente'=>'2'
        ]);

    }
}
