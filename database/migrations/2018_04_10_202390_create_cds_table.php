<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cds', function (Blueprint $table) {
			$table->increments('id');
			$table->date('fecha_registro');
			$table->string('observacion',100);
			$table->enum('entregado',['SI','NO']);
			$table->integer('id_defensa')->unsigned()->nullable();
			$table->foreign('id_defensa')->references('id')->on('defensas')->onDelete('cascade');
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
		Schema::dropIfExists('cds');
	}
}
