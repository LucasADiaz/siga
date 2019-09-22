<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Autoridad;
use App\Legajo;
use Faker\Generator as Faker;

$factory->define(Legajo::class, function (Faker $faker) {
    return [
        'alumno_id'=> Alumno::all()->random()->id,
        'padre_id'=> Autoridad::all()->random()->id,
        'madre_id'=> Autoridad::all()->random()->id,
        'tutor_id'=> Autoridad::all()->random()->id,
    ];
});
