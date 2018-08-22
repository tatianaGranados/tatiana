<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioAsignarSubRolesTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_asignar_sub_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_sis')->nullable()->default('NULL');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->enum('activo',['SI','NO'])->default('SI');
           
            $table->integer('id_funcion')->unsigned();
            $table->integer('id_sub_rol')->unsigned(); 
            $table->integer('id_unidad')->unsigned(); 
            $table->integer('id_usuario')->unsigned(); 

            $table->foreign('id_funcion')->references('id')->on('funciones')->onDelete('cascade');
            $table->foreign('id_sub_rol')->references('id')->on('sub_roles')->onDelete('cascade');
            $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_asignar_sub_roles');
    }
}
