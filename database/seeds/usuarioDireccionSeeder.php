<?php 

use Illuminate\Database\Seeder;

class usuarioDireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. ZARATE VILLCA', 
        	'id_usuario'=>'1', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. MIRAFLORES', 
        	'id_usuario'=>'2', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. OQUENDO', 
        	'id_usuario'=>'3', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. HEROINAS', 
        	'id_usuario'=>'4', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. CALAMA', 
        	'id_usuario'=>'5', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. BLANCO GALINDO', 
        	'id_usuario'=>'6', 
        	'id_tipo_direccion'=>'1'
         ]);

        App\Usuario_direccion::create([

        	'nombre_direccion'=>'AV. LADISLAO CABRERA', 
        	'id_usuario'=>'7', 
        	'id_tipo_direccion'=>'1'
         ]);

    }
}
