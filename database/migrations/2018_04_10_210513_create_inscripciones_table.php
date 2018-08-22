<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_inscripcion')->default('0');
            $table->enum('ins_activo',['SI','NO'])->default('SI');
            $table->string('observacion',100)->default('NINGUNA');
            $table->integer('tipo_inscripcion')->default('1');

            $table->integer('id_usuario_asignar_sub_rol')->default('0')->unsigned();
            $table->integer('id_plan_gestion_unidad')->default('0')->unsigned();

            $table->foreign('id_usuario_asignar_sub_rol')->references('id')->on('usuario_asignar_sub_roles')->onDelete('cascade');
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
        Schema::dropIfExists('inscripciones');
    }
}
