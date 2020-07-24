<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Playlist;
use App\User;
use Faker\Generator as Faker;

$factory->define(Playlist::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
    ];
});
