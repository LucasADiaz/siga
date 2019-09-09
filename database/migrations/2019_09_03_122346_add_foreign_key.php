<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('telefonos', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
        });
        Schema::table('personas', function (Blueprint $table) {        
            $table->foreign('domicilio_id')->references('id')->on('domicilios');
        });
        Schema::table('alumnos', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('telefono_id')->references('id')->on('telefonos');
        });
        Schema::table('materias', function (Blueprint $table) {        
            $table->foreign('profesor_id')->references('id')->on('autoridades');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });
        Schema::table('modulos', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('inasistencias', function (Blueprint $table) {        
            $table->foreign('alumno_id')->references('id')->on('alumnos');
        });
        Schema::table('cursos', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('notas', function (Blueprint $table) {        
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->foreign('categoria_nota_id')->references('id')->on('categoria_notas');
        });
        Schema::table('notificaciones', function (Blueprint $table) {        
            $table->foreign('autoridad_id')->references('id')->on('autoridades');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('categoria_notificacion_id')->references('id')->on('categoria_notificacions');
        });
        Schema::table('documentos', function (Blueprint $table) {        
            $table->foreign('legajo_id')->references('id')->on('legajos');
        });
        Schema::table('periodos', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('modalidades', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('autoridades', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('telefono_id')->references('id')->on('telefonos');
        });
        Schema::table('escuelas', function (Blueprint $table) {        
            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            //$table->foreign('telefono_id')->references('id')->on('telefonos');
        });
        Schema::table('alumno_escuelas', function (Blueprint $table) {        
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('categoria_notas', function (Blueprint $table) {        
            $table->foreign('autoridad_id')->references('id')->on('autoridades');
        });
        Schema::table('categoria_notificacions', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('dia_actividad_cursos', function (Blueprint $table) {        
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('telefonos', function (Blueprint $table) {        
            $table->dropForeign(['persona_id']);
        });
        Schema::table('personas', function (Blueprint $table) {        
            $table->dropForeign(['domicilio_id']);
        });
        Schema::table('alumnos', function (Blueprint $table) {    
            $table->dropForeign(['persona_id','telefono_id']);
        });
        Schema::table('materias', function (Blueprint $table) {        
            $table->dropForeign(['profesor_id','curso_id','modulo_id']);
        });
        Schema::table('modulos', function (Blueprint $table) {
            $table->dropForeign(['escuela_id']);
        });
        Schema::table('inasistencias', function (Blueprint $table) {        
            $table->dropForeign(['alumno_id']);
        });
        Schema::table('cursos', function (Blueprint $table) {        
            $table->dropForeign(['escuela_id']);            
        });
        Schema::table('notas', function (Blueprint $table) {   
            $table->dropForeign(['alumno_id','materia_id','periodo_id','categoria_nota_id']);     
        });
        Schema::table('notificaciones', function (Blueprint $table) {
            $table->dropForeign(['autoridad_id','alumno_id','categoria_notificacion_id']);        
        });
        Schema::table('documentos', function (Blueprint $table) {        
            $table->dropForeign(['legajo_id']);            
        });
        Schema::table('periodos', function (Blueprint $table) {        
            $table->dropForeign(['escuela_id']);  
        });
        Schema::table('modalidades', function (Blueprint $table) {        
            $table->dropForeign(['escuela_id']);            
        });
        Schema::table('autoridades', function (Blueprint $table) {      
            $table->dropForeign(['persona_id','telefono_id']);
        });
        Schema::table('escuelas', function (Blueprint $table) {     
            $table->dropForeign(['domicilio_id','telefono_id']);   
        });
        Schema::table('alumno_escuelas', function (Blueprint $table) {  
            $table->dropForeign(['alumno_id','escuela_id']);  
        });
        Schema::table('categoria_notas', function (Blueprint $table) {        
            $table->dropForeign(['autoridad_id']);            
        });
        Schema::table('categoria_notificacions', function (Blueprint $table) {        
            $table->dropForeign(['escuela_id']);            
        });
        Schema::table('dia_actividad_cursos', function (Blueprint $table) {        
            $table->dropForeign(['curso_id']);            
        });
    }
}
