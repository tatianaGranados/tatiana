<?php
 
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoDocMatPlanGestionUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('grupo_doc_mat_plan_gestion_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('subir_notas',['SI','NO'])->default('SI');
            $table->date('fecha_inicio_doc');
            $table->date('fecha_fin_doc');
            $table->enum('activo',['SI','NO'])->default('SI');

            $table->integer('id_tipo_planilla')->default('1')->unsigned();
            $table->integer('id_usuario_asignar_sub_rol')->default('0')->unsigned();
            $table->integer('id_agrupar_materias')->unsigned();
            
            $table->foreign('id_tipo_planilla')->references('id')->on('tipo_planillas')->onDelete('cascade');
            $table->foreign('id_usuario_asignar_sub_rol','id_usuasigsubrol')->references('id')->on('usuario_asignar_sub_roles')->onDelete('cascade');
            

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
        Schema::dropIfExists('grupo_doc_mat_plan_gestion_unidades');
    }
}
