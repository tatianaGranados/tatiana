<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaPlanGestionUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('materia_plan_gestion_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('porcentaje');
            $table->string('nivel',10);
            $table->string('plan_global',100);
            $table->string('version',10);

            $table->integer('id_unidad_materia')->unsigned();
            $table->integer('id_plan_gestion_unidad')->unsigned();

            $table->foreign('id_unidad_materia')->references('id')->on('unidad_materias')->onDelete('cascade');
            $table->foreign('id_plan_gestion_unidad')->references('id')->on('plan_gestion_unidades')->onDelete('cascade');

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
        Schema::dropIfExists('materia_plan_gestion_unidades');
    }
}
