<?php

use Illuminate\Database\Seeder;

class usuarioAsignarSubRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Usuario_asignar_sub_rol::create([

			'cod_sis'=>'201001230',
			'fecha_inicio'=>'2000-03-10',
			'fecha_fin'=>'2030-03-10',
			'activo'=>'SI',
			'id_funcion'=>'3',
			'id_sub_rol'=>'1',
			'id_unidad'=>'11',
			'id_usuario'=>'1'

         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'201001231',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'3',
            'id_usuario'=>'2'

         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'201006666',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'1',
            'id_usuario'=>'3'

         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'201154876',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'5',
            'id_usuario'=>'4'

         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'2008012744',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'4',
            'id_usuario'=>'5'
 
         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'200115455',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'2',
            'id_usuario'=>'6'

         ]);
        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'200301849',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'12',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'7'

         ]);
        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'200301850',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'12',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'8'

         ]);


        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'200301408',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'10',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'9'

         ]);

        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'200301506',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'1',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'10'

         ]);
 
    }
}
