<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');
            $table->ipAddress('ip');
            $table->string('desc_operacion',500);
            $table->dateTime('fecha_bitacora')->default('1000-01-01 00:00:00');
            // $table->date('fecha_bitacora');
            // $table->time('hora_bitacora');

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_tipo_op_bitacora')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_tipo_op_bitacora')->references('id')->on('tipo_operacion_bitacoras')->onDelete('cascade');

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
        Schema::dropIfExists('bitacoras');
    }
}
