<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoMateriaPlanGestionUnidadesTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_materia_plan_gestion_unidades', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cod_grupo',20);
            $table->enum('grupo_principal',['SI','NO'])->default('SI');

            $table->integer('id_mat_plan_gestion_unidad')->unsigned();
            $table->integer('id_agrupar_materias')->unsigned();
            
            $table->integer('id_tipo_planilla')->unsigned()->default(1);

            $table->foreign('id_mat_plan_gestion_unidad','id_mat')->references('id')->on('materia_plan_gestion_unidades')->onDelete('cascade');
            $table->foreign('id_tipo_planilla')->references('id')->on('tipo_planillas')->onDelete('cascade');

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
        Schema::dropIfExists('grupo_materia_plan_gestion_unidades');
    }
}
