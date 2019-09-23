<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        //REVISAR PROFESOR ID- ¿Necesario tener categorias de autoridades?
        'nombre'=>$faker->sentence(),
    ];
});
