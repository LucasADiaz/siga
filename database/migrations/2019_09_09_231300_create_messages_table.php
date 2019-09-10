<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
    $table->bigIncrements('id')
            ->comment('identifica uniquivocamente a una notificacion');
    
    $table->string('asunto')
            ->comment('titulo de la notifación');
        
    $table->unsignedBigInteger('autoridad_id')
            ->comment('identificador del que genera la notificación ');

    $table->unsignedBigInteger('alumno_id')
            ->comment('identificador del Alumno');

    $table->string('mensaje',400)
            ->comment('mensaje enviado');

    $table->unsignedBigInteger('categoria_message_id')
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
        Schema::dropIfExists('messages');
    }
}
