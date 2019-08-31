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
            $table->bigIncrements('id_materia');
            $table->unsignedBigInteger('id_profesor')->nullable();
            $table->unsignedBigInteger('id_curso')->nullable();
            $table->unsignedBigInteger('id_turno')->nullable();
            $table->unsignedBigInteger('id_modulo')->nullable();
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
