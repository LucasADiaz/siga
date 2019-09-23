<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('dia')
                    ->comment('dia de el modulo Ej: Lunes, Martes..');

            $table->string('turno')
                    ->comment('Ej: Mañana, Tarde o Noche');

            $table->string('nombre')
                    ->comment('nombre del modulo. Ej:1º hora , primero, prehora');
            
            $table->time('hr_entrada')
                    ->comment('horario de entrada del modulo');

            $table->time('hr_salida')
                    ->comment('horario de salida del modulo');

            $table->unsignedBigInteger('escuela_id')
                    ->comment('identifica a que escuela pertenece el modulo');
                    
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
        Schema::dropIfExists('modulos');
    }
}
