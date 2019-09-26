<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use App\Escuela;
use Faker\Generator as Faker;

$factory->define(Escuela::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(2),
        'domicilio_id'=>Domicilio::all()->random()->id,
    ];
});
