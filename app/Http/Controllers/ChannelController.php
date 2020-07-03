<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function showVideos($id)
    {
        $user = User::find($id);
        // $videos = Video::all();
        // $videos = $user->videos();
        $videos = Video::where('user_id', $id)->get();

        return View('betube.channel.profile-video', compact('user', 'videos'));
    }
}
