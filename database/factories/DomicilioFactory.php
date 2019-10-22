<?php

use Faker\Generator as Faker;
use App\Domicilio;
use App\Persona;

$factory->define(Domicilio::class, function (Faker $faker) {
    $persona_ids = Persona::all()->pluck('id')->toArray();

    return [
        'persona_id' => $faker->randomElement($persona_ids),
        'calle' => $faker->streetAddress,
        'departamento' => $faker->buildingNumber,
        'poblacion' => $faker->sentence(3),
        'ciudad' => $faker->city,
        'comuna' => $faker->citySuffix,
        'region' => $faker->state, 
        'pais' => $faker->country,
        'descripcion' => $faker->sentence(10)
    ];

});
