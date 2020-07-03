<?php

use App\Playlist;
use App\Subscription;
use Illuminate\Database\Seeder;
use App\User;
use App\VideoType;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = factory(User::class)->create([
            'email' => 'taquocbao.it.99@gmail.com'
        ]);

        $user2 = factory(User::class)->create([
            'email' => 'coderb2103@gmail.com'
        ]);

        $user1->subscriptions()->create([
            'user_subscribe' => $user2->id
        ]);

        $user2->subscriptions()->create([
            'user_subscribe' => $user1->id
        ]);

        factory(Subscription::class, 1000)->create([
            'user_id' => $user1->id,
        ]);

        factory(Subscription::class, 1000)->create([
            'user_id' => $user2->id,
        ]);

        factory(VideoType::class)->create([
            'name' => "Music"
        ]);

        factory(VideoType::class)->create([
            'name' => "Game"
        ]);
    }
}
