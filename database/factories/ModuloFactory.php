<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modulo;
use Faker\Generator as Faker;

$factory->define(Modulo::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(),
        'dia'=>$faker->randomElement(['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']),
        'turno'=>$faker->randomElement(['mañana','tarde','noche']),
        'hr_entrada'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'hr_salida'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'escuela_id'=> App\Escuela::all()->random()->id,
    ];
});
