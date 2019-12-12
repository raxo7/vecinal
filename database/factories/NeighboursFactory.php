<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Neighbour;
use Faker\Generator as Faker;

$factory->define(Neighbour::class, function (Faker $faker) {
    return [
        'rut' => $faker->randomNumber(9),
        'name' => $faker->firstName(),
        'mother_last_name' => $faker->lastName(),
        'father_last_name' => $faker->lastName(),
        'birthdate' => $faker->date(),
        'street_name' => $faker->streetName(),
        'street_number' => $faker->buildingNumber()
    ];
});
