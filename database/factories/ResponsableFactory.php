<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use App\Persona;
use App\Responsable;
use App\Telefono;
use Faker\Generator as Faker;

$factory->define(Responsable::class, function (Faker $faker) {
    return [
        'profesion' => $faker->streetName(2),
        'lugar_trabajo' => $faker->streetName(2),
        'persona_id'=> Persona::all()->random()->id,
        'domicilio_laboral_id'=> Domicilio::all()->random()->id,
    ];
});
