<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraphs(3, true),
        'amount' => $faker->randomNumber()
    ];
});