<?php

use Illuminate\Database\Seeder;

class usuarioFotografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario_fotografia::class, 15)->create();
    }
}
