<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_identidad',20);
            $table->string('login',30);
            $table->string('clave',200);
            $table->string('apellidos',50);
            $table->string('nombres',50);
            $table->string('sexo',10);
            $table->date('fecha_nac');
            $table->enum('usuario_activo',['SI','NO']);
            $table->enum('inscribir_adm',['SI','NO']);
            $table->string('estilo',20);
            $table->enum('subir_foto',['SI','NO']);
            
            $table->integer('id_estado_civil')->unsigned();
            $table->integer('id_provincia')->unsigned();
            $table->integer('ciudad_expedido_doc')->unsigned();
            $table->integer('id_tipo_doc_identidad')->unsigned();

            $table->foreign('id_estado_civil')->references('id')->on('estado_civiles')->onDelete('cascade');
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('ciudad_expedido_doc')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('id_tipo_doc_identidad')->references('id')->on('tipo_doc_identidades')->onDelete('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
