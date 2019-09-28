<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Curso;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'escuela_procedencia' => $faker->streetName(2),
        'persona_id'=> Persona::all()->random()->id,
        'curso_id'=> Curso::all()->random()->id,
    ];
});
