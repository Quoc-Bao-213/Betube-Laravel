<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Video;
use App\Vote;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VoteController extends Controller
{
    public function vote($entityID, $type)
    {
        $entity = $this->getEntity($entityID);

        return auth()->user()->toggleVote($entity, $type);
    }

    public function deleteVote($user_id)
    {
        $test2 = Vote::where('user_id', $user_id);

        $test2->delete();

        return response()->json(['Delete Successfull']);
    }

    public function getEntity($entityID)
    {
        $video = Video::find($entityID);

        if ($video) return $video;

        $comment = Comment::find($entityID);

        if ($comment) return $comment;

        throw new ModelNotFoundException('Entity not found.');
    }
}
