<?php
  
use Illuminate\Database\Seeder;

class gestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        App\Gestion::create([
			
			'anio'=>'2017', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2017-06-20', 
			'fecha_fin'=>'2017-12-22', 
			'activo'=>'NO', 
			'peso_gestion'=>'1', 
			'id_tipo_gestion'=>'2'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2017', 
			'periodo'=>'4', 
			'fecha_inicio'=>'2017-12-26', 
			'fecha_fin'=>'2018-01-22', 
			'activo'=>'NO', 
			'peso_gestion'=>'2', 
			'id_tipo_gestion'=>'3'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2018', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2018-02-22', 
			'fecha_fin'=>'2018-06-10', 
			'activo'=>'SI', 
			'peso_gestion'=>'3', 
			'id_tipo_gestion'=>'1'
        	
         ]);
    }
}
