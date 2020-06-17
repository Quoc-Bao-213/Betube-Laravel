<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Video;
use App\VideoType;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(6),
        'thumbnail' => $faker->imageUrl(),
        'hashtag' => '#'.$faker->sentence(1),
        'video_type_id' => function() {
            return factory(VideoType::class)->create()->id;
        },
        'path' => $faker->word()
    ];
});
