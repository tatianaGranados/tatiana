<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_accesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_sub_acceso', 100);
            $table->string('ruta_sub_acceso', 70);
            $table->text('descripcion_sub_acceso');
            $table->string('icono_sub_acceso', 50)->nullable()->default('NULL');
            $table->enum('defecto_sub_acceso',['SI','NO'])->default('NO');
            $table->integer('peso_sub_acceso');
            
            $table->integer('id_acceso')->unsigned();

            $table->foreign('id_acceso')->references('id')->on('accesos')->onDelete('cascade');
           
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
        Schema::dropIfExists('sub_accesos');
    }
}
