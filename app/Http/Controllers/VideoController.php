<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        $videos = Video::all();

        if (request()->wantsJson()){
            return $video;
        }
            
        // dd($video->comments->first()->replies);

        return view('betube.video', compact('video', 'videos'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');

        return response()->json([]);
    }
}
