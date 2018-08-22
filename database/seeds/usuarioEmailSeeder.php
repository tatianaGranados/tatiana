<?php 

use Illuminate\Database\Seeder;

class usuarioEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Usuario_email::create([

        	'email'=>'jhennycarlagarciaa@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'1', 
        	'id_tipo_email'=>'3'	
         ]);

        App\Usuario_email::create([

        	'email'=>'JCGA_0013@hotmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'1', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'tati@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'2', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'liz@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'3', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'paola@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'4', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'carman@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'5', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'andrea@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'6', 
        	'id_tipo_email'=>'1'	
         ]);

        App\Usuario_email::create([

        	'email'=>'paul@gmail.com', 
        	'email_activo'=>'SI', 
        	'id_usuario'=>'7', 
        	'id_tipo_email'=>'1'	
         ]);
    }
}
