<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nota;
use Faker\Generator as Faker;

$factory->define(Nota::class, function (Faker $faker) {
    return [
        'nota'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'alumno_id'=> App\Alumno::all()->random()->id,
        'materia_id'=> App\Materia::all()->random()->id,
        'periodo_id'=> App\Periodo::all()->random()->id,
        'categoria_nota_id'=> App\CategoriaNota::all()->random()->id,
    ];
});
