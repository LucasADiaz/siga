<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de un alumno');
            
            $table->boolean('is_present')
                    ->comment('indica la presencia del alumno en el dia que se realizo la asistencia');
            
            /*$table->unsignedBigInteger('modulo_id')
                    ->comment('identifica el modulo en el cual se realizo la asistencia');*/
                    

            $table->date('fecha')
                    ->comment('fecha de realizacion de la asistenca');

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
        Schema::dropIfExists('asistencias');
    }
}
