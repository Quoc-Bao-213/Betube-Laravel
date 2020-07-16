<?php

use App\Comment;
use App\Playlist;
use App\Subscription;
use Illuminate\Database\Seeder;
use App\User;
use App\Video;
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

        factory(Subscription::class, 50)->create([
            'user_id' => $user1->id,
        ]);

        factory(Subscription::class, 50)->create([
            'user_id' => $user2->id,
        ]);

        factory(VideoType::class)->create([
            'name' => "Music"
        ]);

        factory(VideoType::class)->create([
            'name' => "Technology"
        ]);
        factory(VideoType::class)->create([
            'name' => "News"
        ]);

        factory(VideoType::class)->create([
            'name' => "Movies"
        ]);

        factory(VideoType::class)->create([
            'name' => "Entertainment"
        ]);

        factory(VideoType::class)->create([
            'name' => "Game"
        ]);

        // $video = factory(Video::class)->create([
        //     'user_id' => $user1->id
        // ]);

        // factory(Comment::class, 50)->create([
        //     'video_id' => $video->id
        // ]);

        // $comment = Comment::first();

        // factory(Comment::class, 50)->create([
        //     'video_id' => $video->id,
        //     'comment_id' => $comment->id
        // ]);
    }
}
