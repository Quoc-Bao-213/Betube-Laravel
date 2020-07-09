<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        
        return View('home',compact('videos'));
    }
}
