<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_acceso', 100);
            $table->string('ruta_acceso', 70);
            $table->text('descripcion_acceso');
            $table->string('icono_acceso', 50);
            $table->enum('defecto_acceso',['SI','NO']);
            $table->integer('peso_acceso');    
        
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
        Schema::dropIfExists('accesos');
    }
}
