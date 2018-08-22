<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tipoOperacionBitacoraSeeder::class);
        $this->call(rolSeeder::class);
        $this->call(funcionSeeder::class);
        $this->call(unidadSeeder::class);
        $this->call(tipoDocIdentidadSeeder::class);
        $this->call(paisSeeder::class);
        $this->call(estadoCivilSeeder::class);
        $this->call(tipoDireccionSeeder::class);
        $this->call(tipoTelefonoSeeder::class);
        $this->call(tipoEmailSeeder::class);
        $this->call(ciudadSeeder::class);
        $this->call(provinciaSeeder::class);
        $this->call(usuarioSeeder::class);
        $this->call(usuarioFotografiaSeeder::class);
        $this->call(usuarioDireccionSeeder::class);
        $this->call(usuarioTelefonoSeeder::class);
        $this->call(usuarioEmailSeeder::class);
        $this->call(subRolSeeder::class);
        $this->call(usuarioAsignarSubRolSeeder::class);
        $this->call(accesoSeeder::class);
        $this->call(subAccesoSeeder::class);
        $this->call(accesoSubRolSeeder::class);
        $this->call(tipoGestionSeeder::class);
        $this->call(planSeeder::class);
        $this->call(gestionSeeder::class);
        $this->call(planGestionUnidadSeeder::class);
        $this->call(materiaSeeder::class);
        $this->call(gradoInstruccionSeeder::class);
        $this->call(tituloSeeder::class);
        $this->call(usuarioTituloSeeder::class);
        $this->call(unidadMateriaSeeder::class);
        $this->call(tipoPlanillaSeeder::class);
        $this->call(bitacoraSeeder::class);
        $this->call(tipoAmbienteSeeder::class);
        $this->call(ambienteSeeder::class);
        $this->call(modalidadTitulacionSeeder::class);

    }
}
