<?php

namespace App\Http\Controllers;

use App\Video;
use App\VideoType;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        $videos = Video::all();
        $videoType = VideoType::all();
        if (request()->wantsJson())
            return $video;
        return view('betube.video', compact('video', 'videos','videoType'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');

        return response()->json([]);
    }
}
