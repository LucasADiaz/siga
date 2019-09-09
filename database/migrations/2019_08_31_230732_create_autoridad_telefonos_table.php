<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoridadTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoridad_telefonos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('autoridad_id')
                    ->comment('identificador de la autoridad.');
            
            $table->unsignedBigInteger('telefono_id')
                    ->comment('identificador de la telefono que pertenece el telefono.');

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
        Schema::dropIfExists('autoridad_telefonos');
    }
}
