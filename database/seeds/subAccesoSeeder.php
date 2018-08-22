<?php

use Illuminate\Database\Seeder;

class subAccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Crear Usuario',
			'ruta_sub_acceso' =>'usuarios.create',
			'descripcion_sub_acceso' =>'Esta opción de trabajo permite crear un nuevo usuario dentro el Sistema.',
			'icono_sub_acceso' =>'iconoCrearUsuario.gif',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'90',
			'id_acceso' => '1'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Buscar Usuario',
			'ruta_sub_acceso' =>'usuarios.index',
			'descripcion_sub_acceso' =>'Esta opción de trabajo permite, visualizar la informacion de un Usuarios Registrado en el Sistema segun requirimiento.',
			'icono_sub_acceso' =>'iconoBuscarUsuario.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'87',
			'id_acceso' => '1'
         ]);        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Crear Rol',
			'ruta_sub_acceso' =>'roles.create',
			'descripcion_sub_acceso' =>'Esta opción de trabajo permite crear un nuevo Rol para el Sistema',
			'icono_sub_acceso' =>'iconoCrearRol.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'86',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Listar Rol',
			'ruta_sub_acceso' =>'roles.index',
			'descripcion_sub_acceso' =>'Esta opción le permite editar o eliminar un Rol Seleccionado.',
			'icono_sub_acceso' =>'iconoEditarRol.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'85',
			'id_acceso' => '2'
         ]);
        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Crear Sub-Rol',
			'ruta_sub_acceso' =>'sub_roles.create',
			'descripcion_sub_acceso' =>'Esta opción de trabajo permite crear un nuevo Sub-Rol para el Sistema',
			'icono_sub_acceso' =>'iconoCrearSubRol.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'86',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'Listar Sub-Rol',
			'ruta_sub_acceso' =>'sub_roles.index',
			'descripcion_sub_acceso' =>'Esta opción le permite editar un Sub-Rol Seleccionado.',
			'icono_sub_acceso' =>'iconoEditarSubRol.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'85',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'Asignar Accesos Usuario',
			'ruta_sub_acceso' =>'accesos.index',
			'descripcion_sub_acceso' =>'Esta opcion permite crear buscar a un usuario segun parametros y ver los permisos que tiene, ademas de mostrarle opciones adicionales.',
			'icono_sub_acceso' =>'iconoEditarRol.png',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'85',
			'id_acceso' => '2'
         ]);        
        
    }
}
