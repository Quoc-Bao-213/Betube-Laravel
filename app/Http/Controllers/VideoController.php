<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\PlaylistDetail;
use App\User;
use App\Video;
use App\VideoType;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        $videos = Video::all();
        $videoType = VideoType::all();
        $user = User::find(Auth::id());
        $playlistDetail = PlaylistDetail::all();

        if (request()->wantsJson()){
            return $video;
        }
        // dd($video->comments->first()->replies);

        return view('betube.video', compact('video', 'videos', 'user', 'videoType', 'playlistDetail'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');

        return response()->json(['+1 View']);
    }
}
