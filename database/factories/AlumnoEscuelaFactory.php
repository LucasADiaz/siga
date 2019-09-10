<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AlumnoEscuela;
use Faker\Generator as Faker;

$factory->define(AlumnoEscuela::class, function (Faker $faker) {
    return [
        'fecha_ingreso' => $faker->date(),
        'fecha_salida' => $faker->date(),
        'escuela_id'=> App\Escuela::all()->random()->id,
        'alumno_id'=> App\Alumno::all()->random()->id,
 
    ];
});
