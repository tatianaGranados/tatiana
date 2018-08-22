<?php 
 
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
    	App\Usuario::create([ 
 
			'doc_identidad' => '7962357',
			'login' => 'admin',
			'clave' => bcrypt('admin'),
			'apellidos' => 'GARCIA AVILA',
			'nombres' => 'JHENNY CARLA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1992-11-08',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '1',
			'id_provincia' =>'2',
			'ciudad_expedido_doc' => '1',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([

			'doc_identidad' => '7951988',
			'login' => 'tati',
			'clave' => bcrypt('tati'),
			'apellidos' => 'JALDIN GRANADOS',
			'nombres' => 'TATIANA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'15',
			'ciudad_expedido_doc' => '6',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([

			'doc_identidad' => '7777777',
			'login' => 'liz',
			'clave' => bcrypt('liz'),
			'apellidos' => 'CASTRO CONDORI',
			'nombres' => 'LIZ',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1991-09-13',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '3',
			'id_provincia' =>'20',
			'ciudad_expedido_doc' => '4',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([

			'doc_identidad' => '8888888',
			'login' => 'paola',
			'clave' => bcrypt('paola'),
			'apellidos' => 'ROCABADO',
			'nombres' => 'PAMELA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '1',
			'id_provincia' =>'30',
			'ciudad_expedido_doc' => '9',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([

			'doc_identidad' => '7777888',
			'login' => 'carmen',
			'clave' => bcrypt('carmen'),
			'apellidos' => 'SOLIZ',
			'nombres' => 'CARMEN',
			'sexo' => 'Femenino',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'35',
			'ciudad_expedido_doc' => '5',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([

			'doc_identidad' => '7777666',
			'login' => 'andrea',
			'clave' => bcrypt('andrea'),
			'apellidos' => 'CASTILLO',
			'nombres' => 'ANDREA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '3',
			'id_provincia' =>'40',
			'ciudad_expedido_doc' => '4',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([

			'doc_identidad' => '7777555',
			'login' => 'paul',
			'clave' => bcrypt('paul'),
			'apellidos' => 'GONZALES',
			'nombres' => 'PAUL',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1990-05-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);

        App\Usuario::create([

			'doc_identidad' => '4444444',
			'login' => 'elmer',
			'clave' => bcrypt('elmer'),
			'apellidos' => 'PEREZ AMADOR',
			'nombres' => 'ELMER',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-05-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        App\Usuario::create([

			'doc_identidad' => '3333333',
			'login' => 'weymar',
			'clave' => bcrypt('weymar'),
			'apellidos' => 'MIRANDA ROMERO',
			'nombres' => 'WEYMAR',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1985-10-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        
        App\Usuario::create([

			'doc_identidad' => '5555555',
			'login' => 'walter',
			'clave' => bcrypt('walter'),
			'apellidos' => 'ORELLANA ARAOZ',
			'nombres' => 'WALTER',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-10-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        
        
    }
}
