<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DiaActividadCurso;
use Faker\Generator as Faker;

$factory->define(DiaActividadCurso::class, function (Faker $faker) {
    return [
        'fecha'=> $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
