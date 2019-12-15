<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use App\ActivityType;
use Faker\Generator as Faker;

$types = ActivityType::all();

$factory->define(Activity::class, function (Faker $faker) use ($types) {
    return [
        'name' => $faker->sentence(),
        'sub_title' => $faker->sentence(),
        'activity_date' => \Carbon\Carbon::now()->toDateTimeString(),
        'description' => $faker->paragraphs(3, true),
        'type_id' => $types->random()->id
    ];
});
