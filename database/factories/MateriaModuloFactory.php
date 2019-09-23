<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use App\MateriaModulo;
use App\Modulo;
use Faker\Generator as Faker;

$factory->define(MateriaModulo::class, function (Faker $faker) {
    return [
        'materia_id'=> Materia::all()->random()->id,
        'modulo_id'=> Modulo::all()->random()->id,
    ];
});
