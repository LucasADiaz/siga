<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('escuela_id')
                    ->comment('identifica a que escuela pertenece el curso');

            $table->enum('nivel',['primaria','secundaria'])
                    ->comment('identifica al nivel del curso, si es primario o secundario');
            
            $table->enum('anio',[1,2,3,4,5,6,7])
                    ->comment('identifica el año del curso');

            $table->enum('seccion',['A','B','C','D'])
                    ->comment('identifica la seccion del curso');

            $table->unsignedBigInteger('turno_id')
                    ->comment('identifica el turno');

            
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
        Schema::dropIfExists('cursos');
    }
}
