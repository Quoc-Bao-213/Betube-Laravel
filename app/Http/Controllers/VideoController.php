<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        $videos = Video::all();
        $user = User::find(Auth::id());
        $comments = Comment::all();

        if (request()->wantsJson()){
            return $video;
        }
            
        // dd($video->comments->first()->replies);

        return view('betube.video', compact('video', 'videos', 'user', 'comments'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');

        return response()->json([]);
    }
}
