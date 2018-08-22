<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaNombramientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_nombramientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_carta');
            $table->char('cite');
            $table->string('campo_extra_1',30);
            $table->string('campo_extra_2',30);
            $table->string('campo_extra_3',30);
            
            $table->integer('id_asignar_funcion_defensa')->unsigned();

            $table->foreign('id_asignar_funcion_defensa')->references('id')->on('asignar_funcion_defensas')->onDelete('cascade');

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
        Schema::dropIfExists('carta_nombramientos');
    }
}
