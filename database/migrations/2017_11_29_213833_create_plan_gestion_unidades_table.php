<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanGestionUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_gestion_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_gestion')->unsigned();
            $table->integer('id_plan')->unsigned();
            $table->integer('id_unidad')->unsigned();
            $table->enum('activo',['SI','NO']);
            
            $table->foreign('id_gestion')->references('id')->on('gestiones')->onDelete('cascade');
            $table->foreign('id_plan')->references('id')->on('planes')->onDelete('cascade');
            $table->foreign('id_unidad')->references('id')->on('unidades')->onDelete('cascade');
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
        Schema::dropIfExists('plan_gestion_unidades');
    }
}
