<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use Faker\Generator as Faker;

$factory->define(Domicilio::class, function (Faker $faker) {
    return [
        'calle' => $faker->streetName(2),
        'numero' => $faker->buildingNumber(3),
        'cod_postal' => $faker->buildingNumber,
        'referencias' => $faker->sentence(2),
        'piso' => $faker->buildingNumber,
        'departamento' => $faker->buildingNumber,
                         
    ];
});
