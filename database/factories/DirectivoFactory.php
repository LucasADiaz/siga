<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Directivo;
use Faker\Generator as Faker;

$factory->define(Directivo::class, function (Faker $faker) {
    return [
        'autoridad_id'=> Autoridad::all()->random()->id,
    ];
});
