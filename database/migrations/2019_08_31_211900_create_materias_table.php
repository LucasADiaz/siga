<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('turno_id')->nullable();
            $table->unsignedBigInteger('modulo_id')->nullable();
            $table->timestamp('horario_ini')->nullable();
            $table->timestamp('horario_fin')->nullable();
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
        Schema::dropIfExists('materias');
    }
}
