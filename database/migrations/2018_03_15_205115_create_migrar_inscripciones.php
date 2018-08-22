<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrarInscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrar_inscripciones', function (Blueprint $table) {
          
            $table->increments('id');
            $table->string('cod_estudiante');
            $table->string('ci',20);
            $table->string('apellidos',50);
            $table->string('nombres',50);
            $table->date('fecha_nac');
            $table->string('sexo',10);
            $table->string('cod_plan',20);
            $table->string('nombre_plan',60);
            $table->string('nivelMat',10);
            $table->integer('cod_materia');
            $table->string('nombreMat',150);
            $table->string('tipoMateria',20);
            $table->string('grupoMat',10);
            $table->string('codDocente')->default('NULL')->nullable();
            $table->string('ciDoc',20);
            $table->string('apellidosDocente',50);
            $table->string('nombresDocente',50);
            $table->string('genero',10);
            $table->date('fecha')->default('0000-10-08');
            $table->string('titulo',20);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migrar_inscripciones');
    }
}
