<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',100);
            $table->enum('email_activo',['SI','NO'])->default('NO');
            
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_tipo_email')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_tipo_email')->references('id')->on('tipo_emails')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_emails');
    }
}
