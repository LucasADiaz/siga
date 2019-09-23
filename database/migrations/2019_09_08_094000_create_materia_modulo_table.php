<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_modulo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('materia_id')
                    ->comment('identificador de una materia.');

            $table->unsignedBigInteger('modulo_id')
                    ->comment('identificador de un modulo.');

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
        Schema::dropIfExists('materia_modulo');
    }
}
