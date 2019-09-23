<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use App\CursoMateria;
use App\Materia;
use Faker\Generator as Faker;

$factory->define(CursoMateria::class, function (Faker $faker) {
    return [
        'materia_id'=> Materia::all()->random()->id,
        'curso_id'=> Curso::all()->random()->id,
    ];
});
