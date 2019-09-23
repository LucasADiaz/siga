<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Curso;
use App\Escuela;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'email'=>$faker->freeEmail,
        'grupo_factor'=>$faker->randomElement(['0+','0-','A+','A-','B+','B-','AB+','AB-']),
        'persona_id'=> Persona::all()->random()->id,
        'escuela_id'=> Escuela::all()->random()->id,
        'curso_id'=> Curso::all()->random()->id,
    ];
});
