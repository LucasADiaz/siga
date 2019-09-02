<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nombre',100)
                    ->comment('nombre de la persona.');

            $table->string('apellido',100)
                    ->comment('apellido de la persona.');
            
            $table->date('fecha_nacimiento')
                    ->comment('fecha de nacimiento de la persona.');

            $table->enum('sexo_id',['M','F'])
                    ->comment('sexo de la persona, masculino y femenino. NADA DE HOMOSEXUAL O POKEMON.');
            
            $table->unsignedBigInteger('domicilio_id')
                    ->comment('identificado del domicilio.');

            /*$table->unsignedBigInteger('grupo_factor_id')
                    ->comment('Grupo y Factor sanguineo.');*/

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
        Schema::dropIfExists('personas');
    }
}
