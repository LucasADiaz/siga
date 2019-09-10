<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notificacion;
use Faker\Generator as Faker;

$factory->define(Notificacion::class, function (Faker $faker) {
    return [
        'asunto'=>$faker->sentence(),
        'mensaje'=>$faker->text($maxNbChars = 400),
        'autoridad_id'=> App\Autoridad::all()->random()->id,
        'alumno_id'=> App\Alumno::all()->random()->id,
        'categoria_notificacion_id'=> App\CategoriaNotificacion::all()->random()->id,
    ];
});
