<?php

use Illuminate\Database\Seeder;

class usuarioTituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2005-10-22',
        	'id_usuario'=>'1',
        	'id_titulo'=>'6'
         ]);


        App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2010-03-10',
        	'id_usuario'=>'2',
        	'id_titulo'=>'5'
         ]);

         App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2005-04-12',
        	'id_usuario'=>'3',
        	'id_titulo'=>'5'
         ]);

          App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2000-03-27',
        	'id_usuario'=>'5',
        	'id_titulo'=>'2'
         ]);

           App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2004-11-08',
        	'id_usuario'=>'5',
        	'id_titulo'=>'5'
         ]);

        App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'1999-05-20',
        	'id_usuario'=>'6',
        	'id_titulo'=>'5'
         ]);

        App\Usuario_titulo::create([

        	'descripcion'=>'',
        	'fecha_titulo'=>'2006-12-12',
        	'id_usuario'=>'7',
        	'id_titulo'=>'4'
         ]);

        App\Usuario_titulo::create([

            'descripcion'=>'',
            'fecha_titulo'=>'2006-12-11',
            'id_usuario'=>'8',
            'id_titulo'=>'8'
         ]);

        App\Usuario_titulo::create([

            'descripcion'=>'',
            'fecha_titulo'=>'2006-12-11',
            'id_usuario'=>'9',
            'id_titulo'=>'6'
         ]);

         App\Usuario_titulo::create([

            'descripcion'=>'',
            'fecha_titulo'=>'2006-12-11',
            'id_usuario'=>'10',
            'id_titulo'=>'6'
         ]);
    }
}
