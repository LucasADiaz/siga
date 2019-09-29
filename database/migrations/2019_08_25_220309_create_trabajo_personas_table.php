<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajo_personas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de persona.');

            $table->string('lugar_trabajo')
                    ->nullable()
                    ->comment('identificador de la escuela a la que pertenece el alumno.');
            
            $table->unsignedBigInteger('domicilio_trabajo_id')
                    ->nullable()
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
        Schema::dropIfExists('trabajo_personas');
    }
}
