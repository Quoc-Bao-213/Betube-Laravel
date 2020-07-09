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
       
        $videos = Video::where('user_id', $id)->orderBy('created_at', 'DESC')->get();

        return View('betube.channel.profile-video', compact('user', 'videos'));
    }
}
