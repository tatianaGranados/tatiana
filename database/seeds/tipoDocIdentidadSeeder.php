<?php

use Illuminate\Database\Seeder;

class tipoDocIdentidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_doc_identidad::create([

        	'nombre_tipo_doc_identidad' => 'C.I.'

         ]);
        App\Tipo_doc_identidad::create([

        	'nombre_tipo_doc_identidad' => 'RUN'

         ]);
        App\Tipo_doc_identidad::create([

        	'nombre_tipo_doc_identidad' => 'PASAPORTE'

         ]);
        App\Tipo_doc_identidad::create([

        	'nombre_tipo_doc_identidad' => 'CARNET DE EXTRANJERIA'

         ]);
        App\Tipo_doc_identidad::create([

        	'nombre_tipo_doc_identidad' => 'DNI'

         ]);
    }
}
