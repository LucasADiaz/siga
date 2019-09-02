<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->bigIncrements('id')
                        ->unique()
                        ->comment('identifica uniquivocamente un domicilio');

            $table->string('calle',100)
                    ->comment('nombre de la calle de frente de su casa.');

            $table->integer('numero')
                    ->comment('numero de la casa.');

            $table->integer('cod_postal')
                    ->comment('codigo postal.');

            $table->unsignedBigInteger('localidad_id')
                    ->comment('identificador de la localidad de la provincia.');

            $table->unsignedBigInteger('barrio_id')
                    ->comment('identificador del barrio.');

            $table->string('referencias',400)
                    ->nullable()
                    ->comment('Entre la calles, color de casa');

            $table->integer('piso')
                    ->nullable()
                    ->comment('numero de piso');

            $table->integer('departamento')
                    ->nullable()
                    ->comment('numero del departamento');

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
        Schema::dropIfExists('domicilios');
    }
}
