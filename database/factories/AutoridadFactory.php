<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autoridad;
use Faker\Generator as Faker;

$factory->define(Autoridad::class, function (Faker $faker) {
    return [
        'email'=>$faker->freeEmail,
        'persona_id'=> App\Persona::all()->random()->id,
        'telefono_id'=> App\Telefono::all()->random()->id,
    ];
});
