<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Domicilio::class, function (Faker $faker) {
    return [
        'calle' => $faker->streetName(2),
        'numero' => $faker->buildingNumber(3),
        'barrio' => $faker->streetName(2),
        'cod_postal' => $faker->buildingNumber,
        'localidad'=>$faker->randomElement(['Capital','San José','Pomán']),
        'piso' => $faker->buildingNumber,
        'departamento' => $faker->buildingNumber,          
    ];
});
