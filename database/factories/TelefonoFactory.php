<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Telefono;
use Faker\Generator as Faker;

$factory->define(Telefono::class, function (Faker $faker) {
    return [
        'numero'=>$faker->e164PhoneNumber,
        'categoria'=>$faker->randomElement(['Casa','Trabajo','Movil']),
    ];
});
