<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->title(),
        'description' => $faker->sentence(10),
        'thumbnail' => $faker->imageUrl(),
        'percentage' => 100,
        'total_views' => $faker->numberBetween(1, 10000),
        'path' => $faker->word()
    ];
});
