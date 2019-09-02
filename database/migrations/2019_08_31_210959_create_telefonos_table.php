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
<<<<<<< HEAD
            
             $table->unsignedBigInteger('categoria_id')
                    ->comment('categoria de telefono. Ej: Casa, Trabajo...');

=======
            $table->unsignedBigInteger('categoria_telefono_id')
                    ->comment('catecoria de telefono. Ej: Casa, Trabajo...');
>>>>>>> 3b2f740ddcebf8e853d7b306c3ba7c7fb4fbe066
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
