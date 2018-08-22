<?php

use Illuminate\Database\Seeder;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Ciudad::create([

            'nombre_ciudad' => 'COCHABAMBA',
            'peso_ciudad' => '100',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'SANTA CRUZ',
            'peso_ciudad' => '99',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'LA PAZ',
            'peso_ciudad' => '98',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'ORURO',
            'peso_ciudad' => '97',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'POTOSI',
            'peso_ciudad' => '96',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'TARIJA',
            'peso_ciudad' => '95',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'PANDO',
            'peso_ciudad' => '94',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'BENI',
            'peso_ciudad' => '93',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'CHUQUISACA',
            'peso_ciudad' => '92',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'EXTRANJERO',
            'peso_ciudad' => '91',
            'id_pais' => '2'

         ]);
    }
}
