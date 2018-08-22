<?php

use Illuminate\Database\Seeder;

class estadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Estado_civil::create([

        	'estado_civil' => 'SOLTERO(A)'

         ]);
        App\Estado_civil::create([

        	'estado_civil' => 'CASADO(A)'

         ]);
        App\Estado_civil::create([

        	'estado_civil' => 'DIVORCIADO(A)'

         ]);
        App\Estado_civil::create([

        	'estado_civil' => 'VIUDO(A)'

         ]);
    }
}
