<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'email'=>$faker->freeEmail,
        'grupo_factor'=>$faker->randomElement(['0+','0-','A+','A-','B+','B-','AB+','AB-']),
    ];
});
