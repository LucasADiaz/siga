<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriaNotificacion;
use Faker\Generator as Faker;

$factory->define(CategoriaNotificacion::class, function (Faker $faker) {
    return [
        'escuela_id'=> App\Escuela::all()->random()->id,
        'nombre'=>$faker->sentence(),
        'whatsapp'=>$faker->boolean(),
        'email'=>$faker->boolean(),
        'aplicacion'=>$faker->boolean(),
        
    ];
});
