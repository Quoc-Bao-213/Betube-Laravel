<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VideoType;
use Faker\Generator as Faker;

$factory->define(VideoType::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3)
    ];
});
