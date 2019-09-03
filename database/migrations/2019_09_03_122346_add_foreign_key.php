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
        Schema::table('asistencias', function (Blueprint $table) {        
            $table->foreign('profesor_id')->references('id')->on('autoridades');
            $table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::table('telefonos', function (Blueprint $table) {        
            $table->dropForeign(['persona_id']);
        });
        Schema::table('personas', function (Blueprint $table) {        
            $table->dropForeign(['domicilio_id']);
        });
    }
}
