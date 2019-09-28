<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TutorSuplente;
use Faker\Generator as Faker;

$factory->define(TutorSuplente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2),
        'apellido' => $faker->sentence(1),
        'alumno_id'=> App\Alumno::all()->random()->id,
        'parentesco'=> $faker->randomElement(['Tia','Tio','Hermana','Hermano']),

    ];
});
