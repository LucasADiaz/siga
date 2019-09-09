<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriaNota;
use Faker\Generator as Faker;

$factory->define(CategoriaNota::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sequence(),
    ];
});
