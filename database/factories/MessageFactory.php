<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'asunto'=>$faker->sentence(),
        'mensaje'=>$faker->text($maxNbChars = 400),
        'emisor_id'=> App\Autoridad::all()->random()->id,
        'receptor_id'=> App\Alumno::all()->random()->id,
        'categoria_notificacion_id'=> App\CategoriaMessage::all()->random()->id,
    ];
});
