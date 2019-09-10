<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        //REVISAR PROFESOR ID- ¿Necesario tener categorias de autoridades?
        'profesor_id'=> App\Autoridad::all()->random()->id,
        'curso_id'=> App\Curso::all()->random()->id,
        'modulo_id'=> App\Modulo::all()->random()->id,
    ];
});
