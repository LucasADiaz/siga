<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_profesor', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('materia_id')
                    ->comment('identifica al profesor');

            $table->unsignedBigInteger('profesor_id')
                    ->comment('identifica al profesor');

            $table->enum('caracter',['Tirular','Suplente','Interino'])
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
        Schema::dropIfExists('materia_profesor');
    }
}
