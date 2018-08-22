<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadMateriasTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_unidad')->unsigned();
            $table->integer('id_materia')->unsigned();

            $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');

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
        Schema::dropIfExists('unidad_materias');
    }
}
