<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('numero')
                    ->comment('numero de telefono formato: +54 9 383 4578983');
            
            $table->unsignedBigInteger('persona_id')
                    ->comment('Identificador de la persona propietaria del telefono.');
            
             $table->enum('categoria',['Casa','Trabajo','Movil'])
                    ->comment('categoria de telefono. Ej: Casa, Trabajo...');

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
        Schema::dropIfExists('telefonos');
    }
}
