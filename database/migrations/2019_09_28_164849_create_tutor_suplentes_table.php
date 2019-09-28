<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorSuplentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_suplentes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de un alumno');

            $table->string('nombre',100)
                    ->comment('nombre de la tutor suplente.');

            $table->string('apellido',100)
                    ->comment('apellido de la tutor suplente.');
            
            $table->enum('parentesco',['Tia','Tio','Hermana','Hermano','Padre','Madre','Abuela','Abuelo'])
                    ->comment('Parentesco con el alumno');

            $table->timestamps();

            //Claves foraneas
            $table->foreign('alumno_id')->references('id')->on('alumnos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_suplentes');
    }
}
