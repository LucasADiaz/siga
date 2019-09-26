<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use App\Telefono;
use Faker\Generator as Faker;

$factory->define(Telefono::class, function (Faker $faker) {
    return [
        'numero'=>$faker->randomElement(['+5493834772459','+5493834571346','+5493834578983','+5493834545986','+5493834756323']),
        'categoria'=>$faker->randomElement(['Laboral','Personal']),
        'persona_id'=>Persona::all()->random()->id,
    ];
});
