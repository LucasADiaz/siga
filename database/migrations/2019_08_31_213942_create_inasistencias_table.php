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
        Schema::create('inasistencias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de un alumno');
                  
            $table->date('fecha')
                    ->comment('fecha que falto el alumno');

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
        Schema::dropIfExists('inasistencias');
    }
}
