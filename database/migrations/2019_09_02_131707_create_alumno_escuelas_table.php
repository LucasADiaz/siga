<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_escuelas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('escuela_id')
                    ->comment('identificador de la escuela.');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de alumno.');

            $table->date('fecha_ingreso')
                    ->comment('fecha de ingreso a la escuela');

            $table->date('fecha_salida')
                    ->comment('fecha de salida o finalizacion de la escuela');

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
        Schema::dropIfExists('alumno_escuelas');
    }
}
