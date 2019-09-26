<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Parentesco;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Parentesco::class, function (Faker $faker) {
    return [
        'persona_id'=> Persona::all()->random()->id,
        'alumno_id'=> Alumno::all()->random()->id,
        'parentesco'=> $faker->randomElement(['Tia','Tio','Hermana','Hermano']),
    ];
});
