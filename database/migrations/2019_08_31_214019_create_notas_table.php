<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('identifica uniquivocamente a una nota');
            $table->unsignedBigInteger('alumno_id')->nullable()->comment('identificador del alumno');
            $table->unsignedBigInteger('materia_id')->nullable()->comment('indentificador de la materia');
            $table->unsignedBigInteger('semestre_id')->nullable()->comment('identificador del semestre');
            $table->enum('nota2',[1,2,3,4,5,6,7,8,9,10])->comment('Nota de la materia obtenida por el alumno en el semestre');
            $table->bigInteger('cat_nota_id')->comment('describe el tipo de nota');
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
        Schema::dropIfExists('notas');
    }
}
