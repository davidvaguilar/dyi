<?php

use Faker\Generator as Faker;
use App\CorreoElectronico;
use App\Persona;

$factory->define(CorreoElectronico::class, function (Faker $faker) {
    $correo_ids = Persona::all()->pluck('id');  //->toArray()
    return [
        'persona_id' => $faker->randomElement($correo_ids),  //$faker->sentence(5),
        'cuenta' => $faker->email,  //$faker->dni; 
        'pais' => $faker->country,
        'asunto' => $faker->sentence(3),
        'comentario' => $faker->sentence(10),
        'observacion' => $faker->sentence(10)  //substr("aaa", 0, strlen("aaa") - 1)
    ];
});
