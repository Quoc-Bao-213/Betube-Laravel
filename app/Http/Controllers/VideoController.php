<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use App\VideoType;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        // dd ($video->id);
        $videos = Video::all();
        $videoType = VideoType::all();
        $user = User::find(Auth::id());

        if (request()->wantsJson()){
            return $video;
        }
        // dd ($video->id);
        // dd($video->comments->first()->replies);

        return view('betube.video', compact('video', 'videos', 'user', 'videoType'));
    }

    public function updateViews(Video $video)
    {
        // dd($video->id);
        $video->increment('total_views');

        return response()->json(['+1 View']);
    }
}
