<?php

use Illuminate\Database\Seeder;

class funcionDefensaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Funcion_defensa::create([

            'descripcion_funcion'=>'PRESIDENTE',
			'estado_funcion'=>'ACTIVO'
            
        ]);

        App\Funcion_defensa::create([

            'descripcion_funcion'=>'MIEMBRO',
			'estado_funcion'=>'ACTIVO'
            
        ]);

        App\Funcion_defensa::create([

            'descripcion_funcion'=>'TUTOR',
			'estado_funcion'=>'ACTIVO'
            
        ]);

        App\Funcion_defensa::create([

            'descripcion_funcion'=>'DECANO',
			'estado_funcion'=>'ACTIVO'
            
        ]);

        App\Funcion_defensa::create([

            'descripcion_funcion'=>'DIRECTOR ACADEMICO',
			'estado_funcion'=>'ACTIVO'
            
        ]);

        App\Funcion_defensa::create([

            'descripcion_funcion'=>'DIRECTOR DE CARRERA',
			'estado_funcion'=>'ACTIVO'
            
        ]);

    }
}
