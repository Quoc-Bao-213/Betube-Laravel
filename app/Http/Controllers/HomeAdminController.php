<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\User;
use App\Video;
use App\Vote;
use Illuminate\Support\Facades\DB;

class HomeAdminController extends Controller
{
    public function index()
    {

          // get total user, video, playlist
          $user = User::all();
          $video = Video::all();
          $playlist = Playlist::all();
          $voteUp = Vote::where('type','up')->get();
          $voteDown = Vote::where('type','down')->get();
          // top user subscriber
          $selectTopUserSubscriber = DB::select("select  users.id, users.name, count(subscriptions.user_subscribe) as subscribe from users, subscriptions where users.id = subscriptions.user_id group by users.id, users.name order by subscribe desc limit 5");
          $getTopUserSubscriber =  json_encode($selectTopUserSubscriber);
  
          // top video most view
          $selectTopViewVideo = Video::orderByDesc('total_views')->limit(5)->get();    
          $getTopViewVideo =  json_encode($selectTopViewVideo);
  
          // top video most like 
          $selectTopLikeVideo = DB::select("select videos.id , videos.title, count(votes.type) as 'like' from votes, videos  where votes.voteable_id = videos.id and votes.type ='up' group by videos.id, videos.title order by 'like' desc");
          $getTopLikeVideo =  json_encode($selectTopLikeVideo);
          
          // top video most dislike
          $selectTopDisLikeVideo = DB::select("select videos.id , videos.title, count(votes.type) as 'dislike' from votes, videos  where votes.voteable_id = videos.id and votes.type ='down' group by videos.id, videos.title order by 'dislike'");
          $getTopDisLikeVideo =  json_encode($selectTopDisLikeVideo);
          return view('home-admin', compact('user', 'video', 'playlist', 'voteUp', 'voteDown',  'getTopUserSubscriber', 'getTopViewVideo', 'getTopLikeVideo', 'getTopDisLikeVideo'));
    }

}
