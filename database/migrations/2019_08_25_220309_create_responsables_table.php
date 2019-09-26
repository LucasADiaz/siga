<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de persona.');

            $table->string('profesion')
                    ->comment('identificador de la escuela a la que pertenece el alumno.');

            $table->string('lugar_trabajo')
                    ->comment('identificador de la escuela a la que pertenece el alumno.');

            $table->unsignedBigInteger('domicilio_laboral_id')
                    ->comment('identificador de la escuela a la que pertenece el alumno.');
            
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
        Schema::dropIfExists('responsables');
    }
}
