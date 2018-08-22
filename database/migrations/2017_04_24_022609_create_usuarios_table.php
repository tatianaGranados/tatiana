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
            $table->string('doc_identidad',20)->default('noDoc');
            $table->string('login',30);
            $table->string('clave',200)->default('');
            $table->string('apellidos',50)->default('no');
            $table->string('nombres',50)->default('no');
            $table->string('sexo',10)->default('MASCULINO');
            $table->date('fecha_nac')->default('0000-10-08');
            $table->enum('usuario_activo',['SI','NO'])->default('SI');
            $table->enum('inscribir_adm',['SI','NO'])->default('SI');
            $table->string('estilo',20)->default('general');
            $table->enum('subir_foto',['SI','NO'])->default('NO');
            
            $table->integer('id_estado_civil')->default('1')->unsigned();
            $table->integer('id_provincia')->default('1')->unsigned();
            $table->integer('ciudad_expedido_doc')->default('1')->unsigned();
            $table->integer('id_tipo_doc_identidad')->default('1')->unsigned();

            $table->foreign('id_estado_civil')->references('id')->on('estado_civiles')->onDelete('cascade');
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('ciudad_expedido_doc')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('id_tipo_doc_identidad')->references('id')->on('tipo_doc_identidades')->onDelete('cascade');
            $table->rememberToken();
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
