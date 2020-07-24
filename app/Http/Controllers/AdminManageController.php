<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Subscription;
use App\User;
use App\Video;
use App\VideoType;
use App\Vote;
use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    public function manageUser()
    {
        $users = User::all();
        return view('admin.manage.user', compact('users'));
    }
    
    public function manageSubscription()
    {   
        $subscriptions = Subscription::all();
        return view('admin.manage.subscription', compact('subscriptions'));
    }

    public function manageVideo()
    {
        $videos = Video::all();
        return view('admin.manage.video', compact('videos'));
    }

    public function manageVideoType()
    {
        $videotypes = VideoType::all();
        return view('admin.manage.video-type', compact('videotypes'));
    }

    public function manageComment()
    {
        $comments = Comment::all();
        return view('admin.manage.comment', compact('comments'));
    }

    public function manageVote()
    {
        $votes = Vote::all();
        return view('admin.manage.vote', compact('votes'));
    }
}
