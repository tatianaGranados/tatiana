<?php
 
use Illuminate\Database\Seeder;

class accesoSubRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '1',
			'id_sub_rol'=>'1'

         ]);
    	App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '2',
			'id_sub_rol'=>'1'

         ]);
    	App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '3',
			'id_sub_rol'=>'1'

         ]);
    	App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '4',
			'id_sub_rol'=>'1'

         ]);
    	App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '5',
			'id_sub_rol'=>'1'

         ]);
         App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '6',
			'id_sub_rol'=>'1'

         ]);
         App\Acceso_sub_rol::create([
    		
    		'id_sub_acceso'=> '7',
			'id_sub_rol'=>'1'

         ]);


       
    }
}
 