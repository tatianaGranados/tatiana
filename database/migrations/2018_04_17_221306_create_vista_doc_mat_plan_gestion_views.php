<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistaDocMatPlanGestionViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE or replace VIEW vista_doc_mat_plan_gestion AS
            (
            SELECT a.id as id_usuario,a.doc_identidad as doc_identidad,a.login as login,a.apellidos as apellidos, a.nombres as nombres, b.cod_sis as cod_sis, b.id as id_usuario_asignar_sub_rol, b.id_sub_rol as id_sub_rol, c.id as id_grupo_doc_mat_plan_gestion_unidad, d.id as id_grupo_materia_plan_gestion_unidad, d.cod_grupo as cod_grupo,d.id_agrupar_materias as id_agrupar_materias,
            d.id_mat_plan_gestion_unidad as id_mat_plan_gestion_unidad,
            e.id_plan_gestion_unidad as id_plan_gestion_unidad,
            f.id as id_unidad_materia, e.version as version,
            f.id_unidad as id_unidad, g.id as id_materia,g.cod_materia as cod_materia,g.nombre_materia as nombre_materia,g.nombre_corto as nombre_mat_corto,g.nombre_impresion as nombre_mat_impresion, i.id as id_plan,i.cod_plan as cod_plan,i.nombre_plan as nombre_plan,i.nombre_plan_corto as nombre_plan_corto,k.id as id_gestion,k.anio as anio,k.periodo as periodo,l.nombre_tipo_gestion as nombre_tipo_gestion,c.id_tipo_planilla as id_tipo_planilla,m.tipo_planilla as tipo_planilla,m.tipo_planilla_abreviado as tipo_planilla_abrev
            FROM usuarios a
            JOIN usuario_asignar_sub_roles b ON b.id_usuario=a.id
            JOIN grupo_doc_mat_plan_gestion_unidades c ON c.id_usuario_asignar_sub_rol=b.id
            JOIN grupo_materia_plan_gestion_unidades d ON c.id_agrupar_materias = d.id_agrupar_materias
            JOIN tipo_planillas m ON m.id = c.id_tipo_planilla
            -- JOIN tipo_planillas m ON m.id = d.id_tipo_planilla
            JOIN materia_plan_gestion_unidades e ON e.id = d.id_mat_plan_gestion_unidad
            JOIN unidad_materias f ON f.id = e.id_unidad_materia
            JOIN materias g ON g.id = f.id_materia
            JOIN plan_gestion_unidades h ON h.id= e.id_plan_gestion_unidad
            JOIN planes i ON i.id=h.id_plan
            JOIN gestiones k ON k.id= h.id_gestion
            JOIN tipo_gestiones l ON l.id=k.id_tipo_gestion 
            -- JOIN unidades n ON n.id=f.id_unidad
            where m.id=d.id_tipo_planilla
            )
            ");
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vista_doc_mat_plan_gestion');
    }
}

// CREATE ALGORITHM=UNDEFINED DEFINER=`weymar`@`127.0.0.1` SQL SECURITY DEFINER VIEW `vista_doc_mat_plan_gestion`  AS  select `a`.`id_usuario` AS `id_usuario`,`a`.`doc_identidad` AS `doc_identidad`,`a`.`login` AS `login`,`a`.`apellidos` AS `apellidos`,`a`.`nombres` AS `nombres`,`b`.`cod_sis` AS `cod_sis`,`b`.`id_usuario_usrsubgrupo` AS `id_usuario_usrsubgrupo`,`b`.`id_usrsubgrupo` AS `id_usrsubgrupo`,`c`.`id_grupo_doc_mat_plan_gestion_unid` AS `id_grupo_doc_mat_plan_gestion_unid`,`d`.`id_grupo_materia_plan_gestion_unid` AS `id_grupo_materia_plan_gestion_unid`,`d`.`cod_grupo` AS `cod_grupo`,`d`.`id_agrupar_materias` AS `id_agrupar_materias`,`d`.`id_mat_plan_gestion_unid` AS `id_mat_plan_gestion_unid`,`e`.`id_plan_gestion_unid` AS `id_plan_gestion_unid`,`e`.`id_unidad_materia` AS `id_unidad_materia`,`e`.`version` AS `version`,`f`.`id_unidad` AS `id_unidad`,`g`.`id_materia` AS `id_materia`,`g`.`codigo_mat` AS `codigo_mat`,`g`.`nombre_mat` AS `nombre_mat`,`g`.`nombre_corto` AS `nombre_mat_corto`,`g`.`nombre_impresion` AS `nombre_mat_impresion`,`i`.`id_plan` AS `id_plan`,`i`.`cod_plan` AS `cod_plan`,`i`.`nombre` AS `nombre`,`i`.`nombre_plan_corto` AS `nombre_plan_corto`,`k`.`id_gestion` AS `id_gestion`,`k`.`anio` AS `anio`,`k`.`periodo` AS `periodo`,`l`.`nombre_tipo_gestion` AS `nombre_tipo_gestion`,`c`.`id_tipo_planilla` AS `id_tipo_planilla`,`m`.`tipo_planilla` AS `tipo_planilla`,`m`.`tipo_planilla_abrev` AS `tipo_planilla_abrev` from (((((((((((`usuarios` `a` join `usuario_usrsubgrupo` `b`) join `grupo_doc_mat_plan_gestion_unid` `c`) join `tipo_planilla` `m`) join `grupos_materia_plan_gestion_unid` `d`) join `materia_plan_gestion_unid` `e`) join `unidad_materia` `f`) join `materias` `g`) join `plan_gestion_unid` `h`) join `planes` `i`) join `gestiones` `k`) join `tipo_gestion` `l`) where ((`a`.`id_usuario` = `b`.`id_usuario`) and (`b`.`id_usuario_usrsubgrupo` = `c`.`id_usuario_usrsubgrupo`) and (`c`.`id_agrupar_materias` = `d`.`id_agrupar_materias`) and (`e`.`id_mat_plan_gestion_unid` = `d`.`id_mat_plan_gestion_unid`) and (`f`.`id_unidad_materia` = `e`.`id_unidad_materia`) and (`g`.`id_materia` = `f`.`id_materia`) and (`h`.`id_plan_gestion_unid` = `e`.`id_plan_gestion_unid`) and (`i`.`id_plan` = `h`.`id_plan`) and (`k`.`id_gestion` = `h`.`id_gestion`) and (`m`.`id_tipo_planilla` = `c`.`id_tipo_planilla`) and (`m`.`id_tipo_planilla` = `d`.`id_tipo_planilla`) and (`l`.`id_tipo_gestion` = `k`.`id_tipo_gestion`)) ;
