<?php

use App\User;
use App\Vote;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) {
    return [
        'type' => 'down',
        'voteable_type' => 'App\Video',
        'voteable_id' => '930eaddb-af71-4faf-9168-7f97dfa14734',
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});