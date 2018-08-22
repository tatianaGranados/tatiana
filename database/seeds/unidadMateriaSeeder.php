<?php
 
use Illuminate\Database\Seeder;

class unidadMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Unidad_materia::create([

           'id_unidad'=>'1',
           'id_materia'=>'1'

        ]);

        App\Unidad_materia::create([

           'id_unidad'=>'2',
           'id_materia'=>'2'

        ]);

        App\Unidad_materia::create([

           'id_unidad'=>'2',
           'id_materia'=>'3'

        ]);

        App\Unidad_materia::create([

           'id_unidad'=>'3',
           'id_materia'=>'4'

        ]);

        App\Unidad_materia::create([

           'id_unidad'=>'4',
           'id_materia'=>'5'

        ]);

         App\Unidad_materia::create([

           'id_unidad'=>'5',
           'id_materia'=>'6'

        ]);
    }
}
