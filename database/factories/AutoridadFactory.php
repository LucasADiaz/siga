<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autoridad;
use App\Persona;
use App\User;
use Faker\Generator as Faker;

$factory->define(Autoridad::class, function (Faker $faker) {
    return [

        'persona_id'=> Persona::all()->random()->id,
        'user_id'=> User::all()->random()->id,
    ];
});
