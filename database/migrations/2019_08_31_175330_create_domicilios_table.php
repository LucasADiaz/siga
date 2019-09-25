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

            $table->unsignedBigInteger('persona_id')
                    ->comment('Identifica a la persona que le pertenece este domicilio.');
            
            $table->string('calle',100)
                    ->comment('nombre de la calle de frente de su casa.');
                
            $table->integer('numero')
                    ->comment('numero de la casa.');
                    
            $table->string('barrio',100)
                            ->comment('nombre del barrio de su casa.');

            $table->integer('cod_postal')
                    ->comment('codigo postal.');

            $table->enum('localidad',['Capital','San José','Pomán'])
                    ->comment('identificador de la localidad de la provincia.');

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
