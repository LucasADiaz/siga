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
        
        Schema::table('domicilios', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
        });
        Schema::table('alumnos', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
            
            $table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::table('messages', function (Blueprint $table) {        
            $table->foreign('emisor_id')->references('id')->on('users');
            $table->foreign('receptor_id')->references('id')->on('users');
            $table->foreign('categoria_notificacion_id')->references('id')->on('categoria_messages');
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
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('telefonos', function (Blueprint $table) {        
            $table->foreign('persona_id')->references('id')->on('personas');
        });
        Schema::table('escuelas', function (Blueprint $table) {        
            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            //$table->foreign('telefono_id')->references('id')->on('telefonos');
        });
        
        Schema::table('categoria_notas', function (Blueprint $table) {        
            $table->foreign('materia_id')->references('id')->on('materias');
        });
        Schema::table('categoria_messages', function (Blueprint $table) {        
            $table->foreign('escuela_id')->references('id')->on('escuelas');
        });
        Schema::table('dia_actividad_cursos', function (Blueprint $table) {        
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
        Schema::table('legajos', function (Blueprint $table) {        
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('padre_id')->references('id')->on('autoridades');
            $table->foreign('madre_id')->references('id')->on('autoridades');
            $table->foreign('tutor_id')->references('id')->on('autoridades');
        });
        Schema::table('profesores', function (Blueprint $table) {        
            $table->foreign('autoridad_id')->references('id')->on('autoridades');
        });
        Schema::table('materia_profesor', function (Blueprint $table) {        
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('profesor_id')->references('id')->on('profesores');
        });
        Schema::table('curso_materia', function (Blueprint $table) {        
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
        Schema::table('materia_modulo', function (Blueprint $table) {        
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /** Modificar cuando este en Produccion
        Schema::table('telefonos', function (Blueprint $table) {        
            $table->dropForeign(['persona_id']);
        });
        Schema::table('personas', function (Blueprint $table) {        
            $table->dropForeign(['domicilio_id']);
        });
        Schema::table('alumnos', function (Blueprint $table) {    
            $table->dropForeign(['persona_id']);
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
            $table->dropForeign(['emisor_id','receptor_id','categoria_notificacion_id']);        
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
            $table->dropForeign(['persona_id']);
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
        Schema::table('autoridad_telefonos', function (Blueprint $table) {        
            $table->dropForeign(['autoridad_id','telefono_id']);            
        });
        Schema::table('legajos', function (Blueprint $table) {        
            $table->dropForeign(['alumno_id']);            
        });
        */
    }
}
