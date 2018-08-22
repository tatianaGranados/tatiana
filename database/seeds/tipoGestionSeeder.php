<?php 

use Illuminate\Database\Seeder;

class tipoGestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'PRIMER SEMESTRE',
			'nombre_corto_tipo_gestion' => '',
			'categoria' => 'S',
			'tipo_gestion'=> '2'
         ]);
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'SEGUNDO SEMESTRE',
			'nombre_corto_tipo_gestion' => '',
			'categoria' => 'S',
			'tipo_gestion'=> '2'
         ]);
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'CURSO VERANO',
			'nombre_corto_tipo_gestion' => '',
			'categoria' => 'O',
			'tipo_gestion'=> '2'
         ]);
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'CURSO INVIERNO',
			'nombre_corto_tipo_gestion' => '',
			'categoria' => 'O',
			'tipo_gestion'=> '2'
         ]);
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'INGRESO DIRECTO',
			'nombre_corto_tipo_gestion' => 'INGRE_DIR',
			'categoria' => 'E',
			'tipo_gestion'=> '1'
         ]);
        App\Tipo_gestion::create([

			'nombre_tipo_gestion' => 'CURSO PROPEDEUTICO PRESENCIAL',
			'nombre_corto_tipo_gestion' => 'PROP_PRE',
			'categoria' => 'P',
			'tipo_gestion'=> '1'
         ]);
    }
}
