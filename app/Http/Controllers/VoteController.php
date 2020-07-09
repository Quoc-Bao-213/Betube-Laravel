<?php

namespace App\Http\Controllers;

use App\Video;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function vote(Video $video, $type)
    {
        return auth()->user()->toggleVote($video, $type);
    }

    public function deleteVote($user_id)
    {
        $test2 = Vote::where('user_id', $user_id);

        $test2->delete();

        return response()->json(['Delete Successfull']);
    }
}
