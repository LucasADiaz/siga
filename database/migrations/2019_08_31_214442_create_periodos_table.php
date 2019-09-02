<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('escuela_id')
                    ->comment('Identifica la escuela que pertenece el formato de periodo que establece.');
                
            $table->string('nombre')
                    ->comment('Nombre del Periodo');

            $table->date('fecha_inicio')
                    ->comment('fecha de inicio del Periodo');

            $table->date('fecha_fin')
                    ->comment('fecha final del Periodo');

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
        Schema::dropIfExists('periodos');
    }
}
