<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Documento;
use Faker\Generator as Faker;

$factory->define(Documento::class, function (Faker $faker) {
    return [
        'dni_pri'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'dni_seg'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'ficha_medica'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'const_cuil'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'const_alum_reg'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
        'anio'=>$faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
