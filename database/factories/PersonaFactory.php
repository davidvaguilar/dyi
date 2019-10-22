<?php

use Faker\Generator as Faker;
use App\Persona;

$factory->define(Persona::class, function (Faker $faker) {
    /*$doctorIds = User::doctors()->pluck('id');
    $patientIds = User::patients()->pluck('id');*/
   // $scheduled_time = $date->format('H:i:s');
   
    $documentos = ['run', 'dni'];
    $sexos = ['masculino', 'femenino'];
    $fecha = $faker->dateTimeBetween('-100 years', '-1 years' );   //, 'now');
    $fecha_nacimiento = $fecha->format('Y-m-d');

    return [
        'tipo_documento' => $faker->randomElement($documentos),  //$faker->sentence(5),
        'numero_documento' => $faker->numberBetween(11111111, 29999999),  //$faker->dni; 
        'pasaporte' => $faker->numberBetween(11111111, 29999999),
        'apodo' => $faker->suffix,
        'nombre' => $faker->name,
        'paterno' => $faker->lastName,  //$scheduled_time,
        'materno' => $faker->lastName,
        'sexo' => $faker->randomElement($sexos),
        'fecha_nacimiento' => $fecha_nacimiento,
        'imagen' => $faker->imageUrl(250, 250)
    ];
});
