<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_direccion',100);
            
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_tipo_direccion')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_tipo_direccion')->references('id')->on('tipo_direcciones')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_direcciones');
    }
}
