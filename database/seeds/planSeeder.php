<?php

use Illuminate\Database\Seeder;

class planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        App\Plan::create([

            'cod_plan' => '089801',
			'nombre_plan'=> 'LIC. EN CONTADURÍA PÚBLICA',
			'nombre_plan_corto'=>'CONT. PÚBLICA'

         ]);
        App\Plan::create([

            'cod_plan' => '109401',
			'nombre_plan'=>'LIC. EN ADMINISTRACIÓN DE EMPRESAS' ,
			'nombre_plan_corto'=> 'ADM. EMPRESAS'

         ]);
        App\Plan::create([

            'cod_plan' => '059801',
			'nombre_plan'=> 'LIC. EN ECONOMÍA',
			'nombre_plan_corto'=> 'ECONOMÍA'

         ]);
        App\Plan::create([

            'cod_plan' => '126091',
			'nombre_plan'=> 'LIC. EN INGENIERÍA FINANCIERA',
			'nombre_plan_corto'=>'FINANCIERA'

         ]);
        App\Plan::create([

            'cod_plan' => '125091',
			'nombre_plan'=> 'LIC. EN INGENIERÍA COMERCIAL',
			'nombre_plan_corto'=>'COMERCIAL'

         ]);
    }
}
