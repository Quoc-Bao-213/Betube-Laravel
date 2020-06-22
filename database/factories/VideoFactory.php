<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Video;
use App\VideoType;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' => 'f3b74401-155b-4565-807f-1d4c7162de3c',
        'title' => $faker->title(),
        'total_views' => $faker->numberBetween(1, 1000),
        'video_type_id' => '19c78eba-8ba2-4664-9423-44b53caff825',
        'total_likes' => $faker->numberBetween(1, 1000),
        'total_dislikes' => $faker->numberBetween(1, 1000),
        'path' => $faker->sentence(5)
    ];
});
