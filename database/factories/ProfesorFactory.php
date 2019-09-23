<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autoridad;
use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'autoridad_id'=> Autoridad::all()->random()->id,
        'titulo'=>$faker->sentence(2),
    ];
});
