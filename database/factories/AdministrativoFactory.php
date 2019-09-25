<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrativo;
use App\Autoridad;
use Faker\Generator as Faker;

$factory->define(Administrativo::class, function (Faker $faker) {
    return [
        'autoridad_id'=> Autoridad::all()->random()->id,
    ];
});
