<?php

use Illuminate\Database\Seeder;

class tipoPlanillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_planilla::create([

        	'tipo_planilla'=>'NORMAL',
        	'tipo_planilla_abreviado'=>'N'
         ]);

        App\Tipo_planilla::create([

        	'tipo_planilla'=>'EXAMEN DE MESA',
        	'tipo_planilla_abreviado'=>'ME'
         ]);
    }
}
