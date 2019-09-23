<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use App\MateriaProfesor;
use App\Profesor;
use Faker\Generator as Faker;

$factory->define(MateriaProfesor::class, function (Faker $faker) {
    return [
        'materia_id'=> Materia::all()->random()->id,
        'profesor_id'=> Profesor::all()->random()->id,
        'caracter'=>$faker->randomElement(['Tirular','Suplente','Interino']),
    ];
});
