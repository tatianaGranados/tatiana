<?php

use Illuminate\Database\Seeder;

class planGestionUnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'1',
        	'id_unidad'=>'3',
        	'activo'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'2',
        	'id_unidad'=>'2',
        	'activo'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'3',
        	'id_unidad'=>'1',
        	'activo'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'4',
        	'id_unidad'=>'5',
        	'activo'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'5',
        	'id_unidad'=>'4',
        	'activo'=>'SI'
        	
         ]);

    }
}
