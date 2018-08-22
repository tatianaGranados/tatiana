<?php 

use Illuminate\Database\Seeder;

class materiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Materia::create([

            'cod_materia'=>'1304048',
            'nombre_materia'=>'TALLER DE TITULACION',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

        App\Materia::create([

            'cod_materia'=>'1301045',
            'nombre_materia'=>'TALLER I',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

        App\Materia::create([

            'cod_materia'=>'1301054',
            'nombre_materia'=>'TALLER II',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

        App\Materia::create([

            'cod_materia'=>'1302212',
            'nombre_materia'=>'TALLER DE TITULACION',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

        App\Materia::create([

            'cod_materia'=>'1301170',
            'nombre_materia'=>'MODALIDADES DE TITULACION',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

        App\Materia::create([

            'cod_materia'=>'1302212',
            'nombre_materia'=>'TALLER DE TITULACION',
            'nombre_corto'=>'',
            'nombre_impresion'=>''
            
        ]);

    }
}
