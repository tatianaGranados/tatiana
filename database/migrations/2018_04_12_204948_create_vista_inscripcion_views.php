<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistaInscripcionViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE or replace VIEW vista_inscripcion AS
            (
            SELECT f.id_usuario as id_usuario,f.id as id_usuario_asignar_sub_rol,g.doc_identidad as doc_identidad,g.apellidos as apellidos,g.nombres as nombres,g.sexo as sexo,g.fecha_nac as fecha_nac, f.id_sub_rol as id_sub_rol,f.cod_sis as cod_sis,a.id as id_inscripcion,a.tipo_inscripcion as tipo_inscripcion,b.id as id_plan_gestion_unidad,c.id as id_gestion,c.anio as anio,c.periodo as periodo,c.activo as activa_ins,d.id as id_plan,d.cod_plan as cod_plan,d.nombre_plan as nombre_plan,e.categoria as categoria,e.nombre_tipo_gestion as nombre_tipo_gestion,e.tipo_gestion as tipo_gestion,a.cod_inscripcion as cod_inscripcion
            FROM inscripciones a
            JOIN plan_gestion_unidades b ON b.id=a.id_plan_gestion_unidad
            JOIN gestiones c ON c.id=b.id_gestion
            JOIN planes d ON d.id = b.id_plan
            JOIN tipo_gestiones e ON e.id = c.id_tipo_gestion
            JOIN usuario_asignar_sub_roles f ON f.id = a.id_usuario_asignar_sub_rol 
            JOIN usuarios g ON g.id = f.id_usuario
            -- order by g.id
            )
            ");
        // select `f`.`id_usuario` AS `id_usuario`,`f`.`id_usuario_usrsubgrupo` AS `id_usuario_usrsubgrupo`,`g`.`doc_identidad` AS `doc_identidad`,`g`.`apellidos` AS `apellidos`,`g`.`nombres` AS `nombres`,`g`.`sexo` AS `sexo`,`g`.`fecha_nac` AS `fecha_nac`,`f`.`id_usrsubgrupo` AS `id_usrsubgrupo`,`f`.`cod_sis` AS `cod_sis`,`a`.`id_inscripcion` AS `id_inscripcion`,`a`.`insc_activa` AS `insc_activa`,`a`.`observaciones` AS `observaciones`,`a`.`tipo_inscripcion` AS `tipo_inscripcion`,`a`.`lugar_clases` AS `lugar_clases`,`a`.`horario_clases` AS `horario_clases`,`b`.`id_plan_gestion_unid` AS `id_plan_gestion_unid`,`c`.`id_gestion` AS `id_gestion`,`c`.`anio` AS `anio`,`c`.`periodo` AS `periodo`,`c`.`activa_ins` AS `activa_ins`,`d`.`id_plan` AS `id_plan`,`d`.`cod_plan` AS `cod_plan`,`d`.`nombre` AS `nombre`,`e`.`categoria` AS `categoria`,`e`.`nombre_tipo_gestion` AS `nombre_tipo_gestion`,`e`.`tipo_gestion` AS `tipo_gestion`,`a`.`cod_inscripcion` AS `cod_inscripcion`,`a`.`insc_tesis` AS `insc_tesis`,`a`.`ins_gr_eg` AS `ins_gr_eg`,`a`.`ex_gr_estado` AS `ex_gr_estado` 
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vista_inscripcion');
    }
}
