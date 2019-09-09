<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inasistencia;
use Faker\Generator as Faker;

$factory->define(Inasistencia::class, function (Faker $faker) {
    return [
        'alumno_id'=> App\Alumno::all()->random()->id,
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
