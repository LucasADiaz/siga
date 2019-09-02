<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_notas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('autoridad_id')
                    ->comment('identificador de el Profesor que crea la categoria de la nota.');

            $table->string('nombre')
                    ->comment('nombre de la categoria de la nota.');

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
        Schema::dropIfExists('categoria_notas');
    }
}
