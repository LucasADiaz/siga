<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentescos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de persona.');

            $table->unsignedBigInteger('alumno_id')
                    ->comment('identificador de alumno.');
                
            $table->enum('parentesco',['Tia','Tio','Hermana','Hermano','Padre','Madre','Abuela','Abuelo'])
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
        Schema::dropIfExists('parentescos');
    }
}
