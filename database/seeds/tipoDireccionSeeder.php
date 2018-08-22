<?php 

use Illuminate\Database\Seeder;

class tipoDireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'PARTICULAR',
        	'peso_tipo_direccion' => '100'
         ]);


        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'TRABAJO',
        	'peso_tipo_direccion' => '85'
         ]);
        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'OTRA',
        	'peso_tipo_direccion' => '75'
         ]);
      
    }
}
