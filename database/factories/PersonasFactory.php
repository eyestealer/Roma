<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Persona;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Null_;


$factory->define(Persona::class, function (Faker $faker) {
    return [
        'per_apellido' => $faker->name,
        'per_nombre' => $faker->name,
        'per_DNI' => $faker->numberBetween($min = 10000000, $max = 99999999),
    ];
});
