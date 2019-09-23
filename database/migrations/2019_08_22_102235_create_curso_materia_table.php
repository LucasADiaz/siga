<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_materia', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('materia_id')
                    ->comment('identifica al profesor');

            $table->unsignedBigInteger('curso_id')
                    ->comment('identifica al profesor');

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
        Schema::dropIfExists('curso_materia');
    }
}
