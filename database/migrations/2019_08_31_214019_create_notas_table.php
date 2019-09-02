<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            //inicia las tablas de notas
            $table->bigIncrements('id')
                ->comment('identifica uniquivocamente a una nota');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador del alumno');

            $table->unsignedBigInteger('materia_id')
                    ->comment('indentificador de la materia');

            $table->unsignedBigInteger('periodo_id')
                    ->comment('identificador del Periodo');

            $table->enum('nota',[1,2,3,4,5,6,7,8,9,10])
                    ->comment('Nota de la materia obtenida por el alumno en el semestre');

            $table->unsignedBigInteger('categoria_nota_id')
                    ->comment('describe el tipo de nota');

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
        Schema::dropIfExists('notas');
    }
}
