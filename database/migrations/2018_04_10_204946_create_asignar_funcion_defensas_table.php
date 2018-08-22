<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarFuncionDefensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_funcion_defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observacion',300)->default('NINGUNA');

            $table->integer('id_funcion')->unsigned();
            $table->integer('id_defensa')->unsigned();
            $table->integer('id_usuario_asignar_sub_rol')->unsigned();

            $table->foreign('id_funcion')->references('id')->on('funciones')->onDelete('cascade');
            $table->foreign('id_defensa')->references('id')->on('defensas')->onDelete('cascade');
            $table->foreign('id_usuario_asignar_sub_rol')->references('id')->on('usuario_asignar_sub_roles')->onDelete('cascade');
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
        Schema::dropIfExists('defensas_pro_fun');
    }
}
