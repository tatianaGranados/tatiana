<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefensasTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_defensa',100);
            $table->date('fecha_defensa');
            $table->time('hora_defensa');
            $table->string('descripcion',100);
            $table->char('avance');
            $table->string('empresa')->nullable();

            $table->integer('id_modalidad_titulacion')->unsigned();
            $table->integer('id_ambiente')->unsigned();
            $table->foreign('id_modalidad_titulacion')->references('id')->on('modalidad_titulaciones')->onDelete('cascade');
            $table->foreign('id_ambiente')->references('id')->on('ambientes')->onDelete('cascade');
            

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
        Schema::dropIfExists('defensas');
    }
}
