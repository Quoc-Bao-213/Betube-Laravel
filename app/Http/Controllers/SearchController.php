<?php

namespace App\Http\Controllers;

use App\Video;

class SearchController extends Controller
{
    public function index()
    {   
        $videos = Video::all();
        $query = request()->search;
        $searchVideos = collect();

        if ($query) {
            $searchVideos = Video::where('title', 'LIKE', "%{$query}%")->orWhere('hashtag', 'LIKE', "%{$query}%")->paginate(50);
            // dd($query);
        }

        return view('betube.search')->with([
            'searchVideos' => $searchVideos,
            'videos' => $videos
        ]);
    }
}
