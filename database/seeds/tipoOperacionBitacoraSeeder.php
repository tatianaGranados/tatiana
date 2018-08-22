<?php

use Illuminate\Database\Seeder;

class tipoOperacionBitacoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_operacion_bitacora::create([
			'operacion_bitacora' => 'INGRESO DEL USUARIO SISTEMA',	
         ]);
        App\Tipo_operacion_bitacora::create([
			'operacion_bitacora' => 'SALIR DEL SISTEMA',
         ]);
        App\Tipo_operacion_bitacora::create([
			'operacion_bitacora' => 'USUARIO NUEVO',
         ]);
        App\Tipo_operacion_bitacora::create([
			'operacion_bitacora' => 'USUARIO MODIFICACION',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'USUARIO ELIMINAR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'REGISTRAR NUEVA GESTION',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR GESTION',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR GESTION',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'CREAR ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'CREAR SUB-ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR SUB-ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR SUB-ROL USR',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'NUEVO TELEFONO USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR TELEFONO USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR TELEFONO USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'NUEVA DIRECCION USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR DIRECCION USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR DIRECCION USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'NUEVO EMAIL USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR EMAIL USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ELIMINAR EMAIL USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'CAMBIAR LOGIN USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'CAMBIAR CONTRASEÑA USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'ASIGNAR NUEVO ACCESO A USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'MODIFICAR ACCESO DE USUARIO',
        ]);
        App\Tipo_operacion_bitacora::create([
            'operacion_bitacora' => 'SUBIR PLANILLA DE ESTUDIANTES EN TALLER',
        ]);
    }
}
