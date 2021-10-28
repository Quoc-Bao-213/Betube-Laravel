<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\PlaylistDetail;
use App\User;
use App\Video;
use App\VideoType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show(Video $video, Request $request)
    {   
        $videos = Video::where('percentage', 100)->get();
        $videoType = VideoType::all();
        $user = User::find(Auth::id());
        $playlistDetail = PlaylistDetail::all();
        
        $url = $request->url();

        if (request()->wantsJson()) {
            return $video;
        }
        // dd($video->comments->first()->replies);

        return view('betube.video', compact('video', 'videos', 'user', 'videoType', 'url', 'playlistDetail'));
    }

    public function showWithPlaylist(Video $video, Request $request, $playlistID)
    {   
        $videos = Video::where('percentage', 100)->get();
        $videoType = VideoType::all();
        $user = User::find(Auth::id());
        $playlist = Playlist::find($playlistID);
        $playlistDetail = PlaylistDetail::all();
        $findPlaylistDetail = PlaylistDetail::where('playlist_id', $playlistID)->get();
        
        $url = $request->url();

        if (request()->wantsJson()) {
            return $video;
        }

        return view('betube.video', compact('video', 'videos', 'user', 'videoType', 'url', 'playlistDetail', 'playlist', 'findPlaylistDetail'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');
        $video->save();

        return response()->json(['+1 View']);
    }
}
