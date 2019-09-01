<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->bigIncrements('id')
                    ->comment('identifica uniquivocamente a una notificacion');
            
            $table->string('asunto')
                    ->comment('titulo de la notifación');
                
            $table->unsignedBigInteger('de')
                    ->comment('identificador de la autoridad que genera la notificación ');

            $table->unsignedBigInteger('a')
                    ->comment('identificador del alumno');

            $table->string('mensaje',400)
                    ->comment('mensaje enviado');

            $table->unsignedBigInteger('categoria_notificacion_id')
                    ->comment('se identifica el/los medios de emision del mensaje');
                    
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
        Schema::dropIfExists('notificaciones');
    }
}
