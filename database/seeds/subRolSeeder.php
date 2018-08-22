<?php 

use Illuminate\Database\Seeder;

class subRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        
		App\Sub_rol::create([
			
			'nombre_sub_rol' =>'ADMINISTRADOR TOTAL',
			'descripcion_sub_rol' => 'AdmTot',
			'id_rol' =>'1'
        	
         ]);
		
		App\Sub_rol::create([
			
			'nombre_sub_rol' =>'ADMINISTRADOR ACADEMICO',
			'descripcion_sub_rol' => 'ADM ACAD',
			'id_rol' =>'1'
		]);
				
		App\Sub_rol::create([
			
			'nombre_sub_rol' =>'ADMINISTRADOR INFO USUARIOS',
			'descripcion_sub_rol' => 'PUEDE CAMBIAR INFO DE USUARIOS',
			'id_rol' =>'1'
        	
         ]);
		 
		 App\Sub_rol::create([
			
			'nombre_sub_rol' =>'PLANTA',
			'descripcion_sub_rol' => 'PERSONAL CONTRATO INDEFINIDO',
			'id_rol' =>'2'
        	
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'FONDOS PROPIOS',
			'descripcion_sub_rol' => 'PERSONAL DE CONTRATO DE SERVICIO',
			'id_rol' =>'2'
        	 
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'PLAZO FIJO',
			'descripcion_sub_rol' => 'PERSONAL DE CONTRATO A PLAZO FIJO',
			'id_rol' =>'2'
        	
         ]);
        	
         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'DOCENTE',
			'descripcion_sub_rol' => 'PERSONAL DOCENTE',
			'id_rol' =>'3'
        
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'DOCENTE EXAMEN DE GRADO',
			'descripcion_sub_rol' => 'EX DOC',
			'id_rol' =>'3'
        	
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'AUXILIAR DE SERVICIOS',
			'descripcion_sub_rol' => 'PERSONAL DOCENTE',
			'id_rol' =>'3'
        	
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'POSTULANTE FCE',
			'descripcion_sub_rol' => 'POSTULANTES EXAMEN DE INGRESO O PROPEDEUTICO',
			'id_rol' =>'4'
        	
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'ESTUDIANTE PREGRADO',
			'descripcion_sub_rol' => 'ESTUDIANTE PREGRADO',
			'id_rol' =>'4'
        	
         ]);

         App\Sub_rol::create([
			
			'nombre_sub_rol' =>'DEFECTO VISITANTE',
			'descripcion_sub_rol' => 'VISITANTES',
			'id_rol' =>'5'
        	
         ]);

    }
}
