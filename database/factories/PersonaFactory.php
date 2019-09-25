<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2),
        'apellido' => $faker->sentence(1),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' =>$faker->randomElement(['M','F']),
    ];
});
