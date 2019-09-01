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

            $table->enum('nivel_curso',['primaria','secundaria'])
                    ->comment('identifica al nivel del curso, si es primario o secundario');
            
            $table->enum('anio_curso',[1,2,3,4,5,6,7])
                    ->comment('identifica el año del curso');

            $table->enum('seccion_curso',['A','B','C','D'])
                    ->comment('identifica la seccion del curso');

            
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
