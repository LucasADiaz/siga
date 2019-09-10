<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AutoridadTelefono;
use Faker\Generator as Faker;

$factory->define(AutoridadTelefono::class, function (Faker $faker) {
    return [
        'autoridad_id'=> App\Autoridad::all()->random()->id,
        'telefono_id'=> App\Telefono::all()->random()->id,
    ];
});
