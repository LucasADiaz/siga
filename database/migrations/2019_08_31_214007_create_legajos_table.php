<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legajos', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->comment('identifica uniquivocamente a un legajo');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de un alumno');

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
        Schema::dropIfExists('legajos');
    }
}
