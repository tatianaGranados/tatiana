<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoGestionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_gestiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_tipo_gestion',60);
            $table->string('nombre_corto_tipo_gestion',50)->nullable();
            $table->enum('categoria',['P','E', 'S','O'])->default('E');
            $table->integer('tipo_gestion');

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
        Schema::dropIfExists('tipo_gestiones');
    }
}
