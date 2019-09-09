<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inasistencia;
use Faker\Generator as Faker;

$factory->define(Inasistencia::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
