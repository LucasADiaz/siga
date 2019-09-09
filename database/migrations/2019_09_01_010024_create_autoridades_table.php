<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoridades', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('persona_id')
                    ->comment('identificador de persona.');

            $table->string('email')
                    ->comment('correo electronico que para el autoridad.');

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
        Schema::dropIfExists('autoridades');
    }
}
