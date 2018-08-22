<?php

use Illuminate\Database\Seeder; 

class tipoTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'PARTICULAR',
        	'peso_tipo_telefono' => '100'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'MOVIL',
        	'peso_tipo_telefono' => '99'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'TRABAJO',
        	'peso_tipo_telefono' => '98'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'FAX TRABAJO',
        	'peso_tipo_telefono' => '97'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'FAX PARTICULAR',
        	'peso_tipo_telefono' => '96'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'MOVIL TRABAJO',
        	'peso_tipo_telefono' => '95'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'INTERNO OFICINA',
        	'peso_tipo_telefono' => '94'
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'OTRO',
        	'peso_tipo_telefono' => '93'
         ]);
    }
}
