<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriaNotificacion;
use Faker\Generator as Faker;

$factory->define(CategoriaNotificacion::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sequence(),
        'whatsapp'=>$faker->boolean(),
        'email'=>$faker->boolean(),
        'aplicacion'=>$faker->boolean(),
    ];
});
