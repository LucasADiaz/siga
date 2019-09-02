<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\TableSeparator;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->comment('identifica uniquivocamente un documento');

            $table->unsignedBigInteger('legajo_id')
                    ->comment('identifica a que legajo pertenecen los pdf ');

            $table->binary('dni_pri')->comment('primera hoja del dni');
            $table->binary('dni_seg')->comment('segunda hoda del dni');
            $table->binary('ficha_medica')->comment('ficha medica');
            $table->binary('const_cuil')->comment('constancia de cuil');
            $table->binary('libreta')->comment('libreta de año pasado');
            $table->binary('const_alum_reg')->comment('constancia de alumno regular');
            $table->date('anio')->comment('año donde ingresa la documentación');
            $table->timestamps();
        });


        //opcion para guardar URL en lugar del archivo

        
        /*Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->comment('identifica uniquivocamente un documento');

            $table->unsignedBigInteger('legajo_id')
                    ->comment('identifica a que legajo pertenecen los pdf ');

            $table->string('dni_pri')->comment('primera hoja del dni');
            $table->string('dni_seg')->comment('segunda hoda del dni');
            $table->string('ficha_medica')->comment('ficha medica');
            $table->string('const_cuil')->comment('constancia de cuil');
            $table->string('libreta')->comment('libreta de año pasado');
            $table->string('const_alum_reg')->comment('constancia de alumno regular');
            $table->date('anio')->comment('año donde ingresa la documentación');
            $table->timestamps();
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
