<?php

use Illuminate\Database\Seeder;

class usuarioTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Usuario_telefono::create([

			'numero_telefono'=>'70754687',
			'id_usuario'=>'1', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'70742719',
			'id_usuario'=>'1', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'4712226',
			'id_usuario'=>'1', 
			'id_tipo_telefono'=>'1'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'79788732',
			'id_usuario'=>'2', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'4444444',
			'id_usuario'=>'2', 
			'id_tipo_telefono'=>'1'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'7777777',
			'id_usuario'=>'3', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'66666666',
			'id_usuario'=>'4', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'77776666',
			'id_usuario'=>'5', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'6666777',
			'id_usuario'=>'6', 
			'id_tipo_telefono'=>'2'
			
         ]);

    	App\Usuario_telefono::create([

			'numero_telefono'=>'76767676',
			'id_usuario'=>'7', 
			'id_tipo_telefono'=>'2'
			
         ]);

    }
} 
