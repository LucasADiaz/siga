<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domicilio;
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2),
        'apellido' => $faker->sentence(1),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'lugar_nacimiento' => $faker->sentence(1),
        'sexo' =>$faker->randomElement(['M','F']),
        'nro_doc' =>$faker->numerify('#########'),
        'tipo_nro_doc' =>$faker->randomElement(['DNI','Pasaporte']),
        'nacionalidad' =>$faker->sentence(2),
        'profesion' =>$faker->sentence(2),
        'email' => $faker->safeEmail,
        'domicilio_id' =>Domicilio::all()->random()->id,
    ];
});
