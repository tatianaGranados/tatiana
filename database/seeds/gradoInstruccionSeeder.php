<?php

use Illuminate\Database\Seeder;

class gradoInstruccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'BACHILLER'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'TECNICO MEDIO'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'TECNICO SUPERIOR'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'LICENCIATURA'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'DIPLOMADO'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'MAESTRIA'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'DOCTORADO'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'ESTUDIOS MILITARES'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'PROFESORADO'
        	
         ]);

        App\Grado_Instruccion::create([
			
			'grado_instruccion'=> 'POST DOCTORADO'
        	
         ]);

    }
}
