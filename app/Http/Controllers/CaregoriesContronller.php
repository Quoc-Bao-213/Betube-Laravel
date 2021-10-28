<?php

namespace App\Http\Controllers;

use App\Video;
use App\VideoType;
use App\Vote;

class CaregoriesContronller extends Controller
{
    public function index($id) 
    {
        $categories = VideoType::find($id);
        $allCategories = VideoType::all();
        $videos = Video::where('video_type_id', $id)->where('percentage', 100)->paginate(10);
        $sildeVideo = Video::where('percentage', 100)->get();

        return view('betube.categories', compact('categories', 'allCategories', 'videos', 'sildeVideo'));
    }

    public static function getTotalLike($VideoID)
    {
        $getVotes = Vote::where('type', 'up')->where('voteable_id', $VideoID)->get();

        return count($getVotes);
    }
}
