<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        // $videoDESC = DB::table('videos')->orderBy('total_views', 'DESC')->get();
        $videos = Video::all();
        if (request()->wantsJson())
            return $video;
        return view('betube.video', compact('video', 'videos'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');

        return response()->json([]);
    }
}
