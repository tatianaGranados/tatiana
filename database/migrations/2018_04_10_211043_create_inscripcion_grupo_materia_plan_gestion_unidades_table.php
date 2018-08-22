<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionGrupoMateriaPlanGestionUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_grupo_materia_plan_gestion_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_ins_grupo')->default('1');

            $table->integer('id_inscripcion')->default('0')->unsigned();
            $table->integer('id_grupo_materia_plan_gestion_unidad')->default('0')->unsigned();

            $table->foreign('id_inscripcion','id_ins')->references('id')->on('inscripciones')->onDelete('cascade');
            $table->foreign('id_grupo_materia_plan_gestion_unidad','id_gmpgu')->references('id')->on('grupo_materia_plan_gestion_unidades')->onDelete('cascade');
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
        Schema::dropIfExists('inscripcion_grupo_materia_plan_gestion_unidades');
    }
}
