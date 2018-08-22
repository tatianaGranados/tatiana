<?php

use Illuminate\Database\Seeder;

class bitacoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Bitacora::class, 15)->create();
    }
}
