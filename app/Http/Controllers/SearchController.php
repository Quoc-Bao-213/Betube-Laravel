<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use App\VideoType;
use App\Vote;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {   
        $videos = Video::all();
        $allCategories = VideoType::all();
        $query = request()->search;
        $searchVideos = collect();
        $searchChannel = collect();

        if ($query) {
            $searchVideos = Video::where('title', 'LIKE', "%{$query}%")->orWhere('hashtag', 'LIKE', "%{$query}%")->paginate(100);
            $searchChannel = User::where('channel_name', 'LIKE', "%{$query}%")->orWhere('description', 'LIKE', "%{$query}%")->paginate(100);
        }

        return view('betube.search')->with([
            'searchVideos' => $searchVideos,
            'videos' => $videos,
            'allCategories' => $allCategories,
            'searchChannel' => $searchChannel
        ]);
    }

    public static function getTotalLike($VideoID)
    {
        $getVotes = Vote::where('type', 'up')->where('voteable_id', $VideoID)->get();

        return count($getVotes);
    }
}
