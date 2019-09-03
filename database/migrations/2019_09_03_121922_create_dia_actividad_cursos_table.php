<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaActividadCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_actividad_cursos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('fecha')
                    ->comment('fecha que falto el alumno');

            $table->date('curso_id')
                    ->comment('curso que tuvo actividad en esta fecha');

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
        Schema::dropIfExists('dia_actividad_cursos');
    }
}
