<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTitulosTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',50)->nullable()->default('NULL');
            $table->date('fecha_titulo');

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_titulo')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_titulo')->references('id')->on('titulos')->onDelete('cascade');

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
        Schema::dropIfExists('usuario_titulos');
    }
}
