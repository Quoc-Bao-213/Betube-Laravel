<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show(Video $video)
    {   
        $user = User::find(Auth::id());
        if (request()->wantsJson())
            return $video;
        return view('betube.video', compact('video','user'));
    }

    public function updateViews(Video $video)
    {
        $video->increment('total_views');


        return response()->json([]);
    }
}
