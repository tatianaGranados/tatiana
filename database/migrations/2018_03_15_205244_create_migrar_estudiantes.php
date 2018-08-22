<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrarEstudiantes extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('migrar_estudiantes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('codigo');
            $table->string('ci',20)->nullable();
            $table->string('nombres',50)->nullable();
            $table->string('apellidos',50)->nullable();
            $table->string('plan',20);
            $table->date('fecha')->nullable();
            $table->string('sexo',10);
            $table->string('inscrito',10)->default('NO');

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
        Schema::dropIfExists('migrar_estudiantes');
    }
}
