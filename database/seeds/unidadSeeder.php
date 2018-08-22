<?php 
 
use Illuminate\Database\Seeder;

class unidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
 
    	App\Unidad::create([ 

            'nombre_unidad' =>'ECONOMIA',
			'telefono_unidad' =>'4540261',
			'interno_unidad' =>'211',
			'correo_unidad' =>'dir-aud@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'ADMINISTRACION DE EMPRESAS',
            'telefono_unidad' =>'4540245',
            'interno_unidad' =>'213',
            'correo_unidad' =>'dir-adm@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'CONTADURIA PUBLICA',
            'telefono_unidad' =>'4540248',
            'interno_unidad' =>'206',
            'correo_unidad' =>'dir-eco@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'COMERCIAL',
            'telefono_unidad' =>'4540245',
            'interno_unidad' =>'213',
            'correo_unidad' =>'dir-adm@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'FINANCIERA',
            'telefono_unidad' =>'4540248',
            'interno_unidad' =>'206',
            'correo_unidad' =>'dir-eco@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'DECANATO',
            'telefono_unidad' =>'4540261',
            'interno_unidad' =>'204',
            'correo_unidad' =>'decano@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'DIRECCION ACADEMICA',
            'telefono_unidad' =>'4540261',
            'interno_unidad' =>'204',
            'correo_unidad' =>'dir-acad@faces.umss.edu.bo'
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'TALLER ADM. EMPRESAS',
            'telefono_unidad' =>'',
            'interno_unidad' =>'22',
            'correo_unidad' =>''
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'TALLER CONT. PUBLICA',
            'telefono_unidad' =>'',
            'interno_unidad' =>'22',
            'correo_unidad' =>''
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'TALLER ECONOMIA',
            'telefono_unidad' =>'',
            'interno_unidad' =>'22',
            'correo_unidad' =>''
            
        ]);

        App\Unidad::create([

            'nombre_unidad' =>'UTI',
            'telefono_unidad' =>'',
            'interno_unidad' =>'207',
            'correo_unidad' =>''
            
        ]);

    }
}
