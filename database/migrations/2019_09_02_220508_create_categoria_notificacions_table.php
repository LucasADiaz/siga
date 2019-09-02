<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_notificacions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('escuela_id')
                    ->comment('identificador de la escuela que pertenece la categoria de la notificacion.');

            $table->string('nombre')
                    ->comment('nombre de la categoria de la notificacion.');

            $table->boolean('whatsapp')
                    ->comment('La notificacion sera enviada por whatsapp');

            $table->boolean('email')
                    ->comment('La notificacion sera enviada por email');
            
            $table->boolean('aplicacion')
                    ->comment('La notificacion sera enviada por aplicacion');

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
        Schema::dropIfExists('categoria_notificacions');
    }
}
