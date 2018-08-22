<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ambiente',30);
            $table->integer('max_estudiantes')->default(0);
            $table->enum('ambiente_activo',['SI','NO'])->default('SI');

            $table->integer('id_unidad')->unsigned();
            $table->integer('id_tipo_ambiente')->unsigned();

            $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('id_tipo_ambiente')->references('id')->on('tipo_ambientes')->onDelete('cascade');

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
        Schema::dropIfExists('ambientes');
    }
}
