<?php
namespace App\Http\Controllers;

use App\Video;
use App\VideoType;
use App\Vote;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $videoTypes = VideoType::all();
        
        return View('home', compact('videos', 'videoTypes'));
    }

    public static function getTotalLike($VideoID)
    {
        $getVotes = Vote::where('type', 'up')->where('voteable_id', $VideoID)->get();

        return count($getVotes);
    }
}
