<?php
 
use Illuminate\Database\Seeder;

class tipoEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_email::create([

        	'nombre_tipo_email' => 'PARTICULAR',
        	'peso_tipo_email' => '100'
         ]);
         App\Tipo_email::create([

        	'nombre_tipo_email' => 'FACULTATIVO',
        	'peso_tipo_email' => '95'
         ]);
          App\Tipo_email::create([

        	'nombre_tipo_email' => 'TRABAJO',
        	'peso_tipo_email' => '94'
         ]);
           App\Tipo_email::create([

        	'nombre_tipo_email' => 'MESSENGER',
        	'peso_tipo_email' => '93'
         ]);
    }
}
