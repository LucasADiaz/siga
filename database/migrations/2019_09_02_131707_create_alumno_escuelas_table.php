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
<<<<<<< HEAD:database/migrations/2019_08_31_211935_create_turnos_table.php
        Schema::create('turnos', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->unique()
                    ->comment('identifica uniquivocamente un turno');

            $table->string('nombre',7)
                    ->comment('representa el tipo de turno al que podria pertenecer un curso ');

=======
        Schema::create('alumno_escuelas', function (Blueprint $table) {
            $table->bigIncrements('id');
>>>>>>> 3b2f740ddcebf8e853d7b306c3ba7c7fb4fbe066:database/migrations/2019_09_02_131707_create_alumno_escuelas_table.php
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
