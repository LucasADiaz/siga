<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Periodo;
use Faker\Generator as Faker;

$factory->define(Periodo::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(),
        'fecha_inicio'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_fin'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'escuela_id'=> App\Escuela::all()->random()->id,
    ];
});
