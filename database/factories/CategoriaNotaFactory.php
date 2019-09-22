<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriaNota;
use App\Materia;
use Faker\Generator as Faker;

$factory->define(CategoriaNota::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(2),
        'materia_id'=> Materia::all()->random()->id,
        
    ];
});
