<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Escuela;
use Faker\Generator as Faker;

$factory->define(Escuela::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(2),
        
    ];
});
