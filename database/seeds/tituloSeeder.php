<?php

use Illuminate\Database\Seeder;

class tituloSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        App\Titulo::create([
			
			'titlo_abreviado'=>'Aux.',
			'titulo_descripcion'=>'AUXILIAR',
			'id_grado_instruccion'=>'1'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Sra.',
			'titulo_descripcion'=>'SEÑORA',
			'id_grado_instruccion'=>'1'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Sr.',
			'titulo_descripcion'=>'SEÑOR',
			'id_grado_instruccion'=>'1'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Univ.',
			'titulo_descripcion'=>'UNIVERSITARIO',
			'id_grado_instruccion'=>'1'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Lic.',
			'titulo_descripcion'=>'LICENCIADO',
			'id_grado_instruccion'=>'4'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Ing.',
			'titulo_descripcion'=>'INGENIERO',
			'id_grado_instruccion'=>'4'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'MSc.',
			'titulo_descripcion'=>'MAGISTER',
			'id_grado_instruccion'=>'6'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Lic. MSc.',
			'titulo_descripcion'=>'LICENCIADO MAGISTER',
			'id_grado_instruccion'=>'6'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Ing. MSc.',
			'titulo_descripcion'=>'INGENIERO MAGISTER',
			'id_grado_instruccion'=>'6'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Dra.',
			'titulo_descripcion'=>'DOCTORA',
			'id_grado_instruccion'=>'7'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Dr.',
			'titulo_descripcion'=>'DOCTOR',
			'id_grado_instruccion'=>'7'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Tcnl. DIM',
			'titulo_descripcion'=>'TENIENTE CORONEL DIM',
			'id_grado_instruccion'=>'8'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Cap. Ing. DIM',
			'titulo_descripcion'=>'CAPITAN INGENIERO DIM',
			'id_grado_instruccion'=>'8'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'My. DIM',
			'titulo_descripcion'=>'MAYOR DIM',
			'id_grado_instruccion'=>'8'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Cnl.',
			'titulo_descripcion'=>'CORONEL',
			'id_grado_instruccion'=>'8'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Cap. DIM',
			'titulo_descripcion'=>'CAPITAN DIM',
			'id_grado_instruccion'=>'8'
         ]);

        App\Titulo::create([
			
			'titlo_abreviado'=>'Prof.',
			'titulo_descripcion'=>'PROFESOR',
			'id_grado_instruccion'=>'9'
         ]);

    }
}
