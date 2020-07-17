<?php

namespace App\Http\Controllers;

use App\Video;

class SearchController extends Controller
{
    public function index()
    {   
        $query = request()->search;
        $searchVideos = collect();

        if ($query) {
            $searchVideos = Video::where('title', 'LIKE', "%{$query}%")->orWhere('hashtag', 'LIKE', "%{$query}%")->paginate(12);
            // dd($query);
        }

        return view('betube.search')->with([
            'searchVideos' => $searchVideos
        ]);
    }
}
