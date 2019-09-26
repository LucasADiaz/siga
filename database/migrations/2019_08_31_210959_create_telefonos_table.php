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

            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de la autoridad.');

            $table->string('numero')
                    ->comment('numero de telefono formato: +54 9 383 4578983');
            
             $table->enum('categoria',['Personal','Trabajo'])
                    ->comment('categoria de telefono. Ej: Personal, Trabajo...');

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
