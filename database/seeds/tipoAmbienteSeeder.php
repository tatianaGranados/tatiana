<?php

use Illuminate\Database\Seeder;

class tipoAmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'AULA'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'AUDITORIO'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'AMBIENTE EXAMEN'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'LABORATORIO'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'OFICINA'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'GABINETE'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'PROGRAMA'
        ]);

        App\Tipo_ambiente::create([

        	'nombre_tipo_ambiente'=>'TALLER'
        ]);

    }
}
