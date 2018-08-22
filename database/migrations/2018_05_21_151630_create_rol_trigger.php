<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\carbon;
// use Auth;
class CreateRolTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // DB::unprepared('CREATE TRIGGER create_bit_rol after INSERT ON roles FOR EACH ROW
         //        BEGIN
         //        DECLARE ip varchar(50);
         //        DECLARE fecha date;
         //        DECLARE hora time;
         //        set fecha='.Carbon::now()->toDateString().';
         //        set hora='.Carbon::now()->toTimeString().';
         //        set ip='.\Request::ip().';
         //           INSERT INTO bitacoras(ip,desc_operacion,fecha_bitacora,hora_bitacora,id_usuario,id_tipo_op_bitacora) VALUES(ip, "Id del nuevo Registro", now(),hora,1, 9);
         //        END
         //    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::unprepared('DROP TRIGGER if exists create_bit_rol');
    }
}
