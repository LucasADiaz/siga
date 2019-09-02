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
   
            $table->bigIncrements('id')
                    ->unique()
                    ->comment('identifica uniquivocamente a una materia');
            
            $table->unsignedBigInteger('profesor_id')
                    ->comment('identifica al profesor');

            $table->unsignedBigInteger('curso_id')
                    ->comment('identifica al curso');

            $table->unsignedBigInteger('modulo_id')
                    ->comment('identifica el modulo');

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
