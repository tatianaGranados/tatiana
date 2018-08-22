<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioFotografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_fotografias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fotografia',80);
            $table->date('fecha_subida');
            $table->enum('valida',['SI','NO']);
            $table->string('observacion',200)->default('NINGUNA');
 
            $table->integer('id_usuario')->unsigned();

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
        Schema::dropIfExists('usuario_fotografias');
    }
}
