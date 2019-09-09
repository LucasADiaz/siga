<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notificacion;
use Faker\Generator as Faker;

$factory->define(Notificacion::class, function (Faker $faker) {
    return [
        'asunto'=>$faker->sequence(),
        'mensaje'=>$faker->text($maxNbChars = 400),
    
    ];
});
