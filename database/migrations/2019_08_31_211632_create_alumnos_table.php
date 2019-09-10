<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->comment('representa uniquivocamente a un alumno');
   
            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de persona.');

            $table->string('email')
                    ->nullable()
                    ->comment('correo electronico que para el alumno es opcional.');

            $table->enum('grupo_factor',['0+','0-','A+','A-','B+','B-','AB+','AB-'])
                    ->comment('Grupo y Factor sanguineo.');

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
        Schema::dropIfExists('alumnos');
    }
}
