<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modalidad;
use Faker\Generator as Faker;

$factory->define(Modalidad::class, function (Faker $faker) {
    return [
        'escuela_id'=> App\Escuela::all()->random()->id,
        'nombre'=>$faker->sentence(),
    ];
});
