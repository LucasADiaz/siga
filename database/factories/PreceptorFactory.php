<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autoridad;
use App\Preceptor;
use Faker\Generator as Faker;

$factory->define(Preceptor::class, function (Faker $faker) {
    return [
        'autoridad_id'=> Autoridad::all()->random()->id,
    ];
});
