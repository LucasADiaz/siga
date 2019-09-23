<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'asunto'=>$faker->sentence(),
        'mensaje'=>$faker->text($maxNbChars = 400),
        'emisor_id'=> User::all()->random()->id,
        'receptor_id'=> User::all()->random()->id,
        'categoria_notificacion_id'=> App\CategoriaMessage::all()->random()->id,
    ];
});
