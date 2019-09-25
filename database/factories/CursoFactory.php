<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use App\Escuela;
use App\Preceptor;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'nivel'=>$faker->randomElement(['primaria','secundaria']),
        'anio'=>$faker->randomElement([1,2,3,4,5,6,7]),
        'seccion'=>$faker->randomElement(['A','B','C','D']),
        'turno'=>$faker->randomElement(['mañana','tarde','noche']),
        'escuela_id'=> Escuela::all()->random()->id,
        'preceptor_id'=> Preceptor::all()->random()->id,
    ];
});
