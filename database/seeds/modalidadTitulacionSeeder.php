<?php

use Illuminate\Database\Seeder;

class modalidadTitulacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'PROYECTO DE GRADO',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'ADSCRIPCION',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TRABAJO DIRIGIDO',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TRABAJO DE INTERNADO',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'EXCELENCIA ACADEMICO',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'RENDIMIENTO ACADEMICA',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TESIS',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'EXAMEN DE GRADO',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'PTAANG',
			'descripcion_modalidad'=>''
        ]);
    }
}
