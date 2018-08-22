<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistaUsrInsGruposViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE or replace VIEW vista_usr_ins_grupos AS
            (
            SELECT a.id as id_usuario, b.cod_sis as cod_sis,a.doc_identidad as doc_identidad,a.apellidos as apellidos,a.nombres as nombres, a.sexo as sexo, a.fecha_nac AS fecha_nac,c.id as id_inscripcion,e.cod_plan as cod_plan,e.nombre_plan as nombre_plan,e.nombre_plan_corto as nombre_plan_corto,c.ins_activo as ins_activa,b.id as id_usuario_asignar_sub_rol,j.id_materia as id_materia, k.cod_materia as cod_materia, k.nombre_materia as nombre_mat,h.porcentaje as porcentaje_materia,f.id as id_ins_grupo,f.id_grupo_materia_plan_gestion_unidad as id_grupo_materia_plan_gestion_unidad,h.id as id_mat_plan_gestion_unidad, g.id_agrupar_materias as id_agrupar_materias,g.id_tipo_planilla as id_tipo_planilla,f.tipo_ins_grupo as tipo_ins_grupo,d.id_gestion as id_gestion, g.cod_grupo as cod_grupo, h. version as version
            FROM usuarios a
            JOIN usuario_asignar_sub_roles b ON b.id_usuario=a.id
            JOIN inscripciones c ON c.id_usuario_asignar_sub_rol=b.id
            JOIN plan_gestion_unidades d ON d.id = c.id_plan_gestion_unidad
            JOIN planes e ON e.id = d.id_plan
            JOIN inscripcion_grupo_materia_plan_gestion_unidades f ON f.id_inscripcion = c.id
            JOIN grupo_materia_plan_gestion_unidades g ON g.id = f.id_grupo_materia_plan_gestion_unidad
            JOIN materia_plan_gestion_unidades h ON h.id = g.id_mat_plan_gestion_unidad
            JOIN unidad_materias j ON j.id=h.id_unidad_materia
            JOIN materias k ON k.id=j.id_materia
            where c.tipo_inscripcion=1 
            order By a.apellidos, a.nombres
            )
            
            ");
        // select `a`.`id_usuario` AS `id_usuario`,`b`.`cod_sis` AS `cod_sis`,`a`.`doc_identidad` AS `doc_identidad`,`a`.`apellidos` AS `apellidos`,`a`.`nombres` AS `nombres`,`a`.`sexo` AS `sexo`,date_format(`a`.`fecha_nac`,_utf8'%d-%m-%Y') AS `fecha_nac`,`c`.`id_inscripcion` AS `id_inscripcion`,`e`.`cod_plan` AS `cod_plan`,`e`.`nombre` AS `nombre`,`e`.`nombre_plan_corto` AS `nombre_plan_corto`,`c`.`insc_activa` AS `insc_activa`,`b`.`id_usuario_usrsubgrupo` AS `id_usuario_usrsubgrupo`,`j`.`id_materia` AS `id_materia`,`k`.`codigo_mat` AS `codigo_mat`,`k`.`nombre_mat` AS `nombre_mat`,`h`.`porcentaje_materia` AS `porcentaje_materia`,`f`.`id_ins_grupo` AS `id_ins_grupo`,`f`.`id_grupo_materia_plan_gestion_unid` AS `id_grupo_materia_plan_gestion_unid`,`h`.`id_mat_plan_gestion_unid` AS `id_mat_plan_gestion_unid`,`g`.`id_agrupar_materias` AS `id_agrupar_materias`,`g`.`id_tipo_planilla` AS `id_tipo_planilla`,`f`.`tipo_ins_grupo` AS `tipo_ins_grupo`,`d`.`id_gestion` AS `id_gestion`,`g`.`cod_grupo` AS `cod_grupo`,`h`.`version` AS `version` 
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vista_usr_ins_grupos');
    }
}
