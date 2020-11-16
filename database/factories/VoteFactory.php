<?php

use App\User;
use App\Vote;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) {
    return [
        'type' => 'up',
        'voteable_type' => 'App\Video',
        'voteable_id' => '5de971c6-4e3f-4296-acdd-bb32eee24cfb',
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});