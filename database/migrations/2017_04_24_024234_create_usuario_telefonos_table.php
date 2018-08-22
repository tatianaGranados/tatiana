<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_telefonos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_telefono',20);
      
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_tipo_telefono')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_tipo_telefono')->references('id')->on('tipo_telefonos')->onDelete('cascade');
            
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
        Schema::dropIfExists('usuario_telefonos');
    }
}
