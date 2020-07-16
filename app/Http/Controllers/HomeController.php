<?php

namespace App\Http\Controllers;

use App\Video;
use App\VideoType;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $videoTypes = VideoType::all();
        return View('home',compact('videos','videoTypes'));
    }
}
