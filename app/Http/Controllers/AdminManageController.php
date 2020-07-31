<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Subscription;
use App\User;
use App\Video;
use App\VideoType;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{
    //User
    public function manageUser()
    {
        $users = User::all();
        return view('admin.manage.user', compact('users'));
    }
    public function indexAddUser()
    {
        return view('admin.manage.add-user');
    }

    public function addUser(Request $request)
    {
        $checkEmail = User::where('email', $request->email)->exists();
        if(!$checkEmail)
        {
            $user = new User;
            $user->name = $request->name;
            $user->channel_name = $request->channel_name; 
            $user->phone = $request->phone; 
            $user->description = $request->description;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success', 'Create user success!');
        }
        return redirect()->back()->with('error', 'Email is exists!');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('success', 'Delete user success!');
    }

    // Subscription
    
    public function manageSubscription()
    {   
        $subscriptions = Subscription::all();
        return view('admin.manage.subscription', compact('subscriptions'));
    }

    public function deleteSubscription($id)
    {
        $subscriptions = Subscription::find($id);

        $subscriptions->delete();

        return redirect()->back()->with('success','Delete success!');
    }


    // Video
    public function manageVideo()
    {
        $videos = Video::all();
        return view('admin.manage.video', compact('videos'));
    }

    // Video Type
    public function manageVideoType()
    {
        $videotypes = VideoType::all();
        return view('admin.manage.video-type', compact('videotypes'));
    }

    public function indexAddVideoType()
    {
        return view('admin.manage.add-video-type');
    }
    
    public function indexEditVideoType($id)
    {
        $nameVideoType = VideoType::find($id);
        return view('admin.manage.edit-video-type', compact('nameVideoType'));
    }

    public function addVideoType(Request $request)
    {   
        $checkVideoType = VideoType::where('name', $request->name_videotype)->exists();
        if(!$checkVideoType)
        {
            $videotypes = new VideoType;
            $videotypes->name = $request->name_videotype;
            $videotypes->save();
            return redirect()->back()->with('success', 'Create video type success!');
        }else{
            return redirect()->back()->with('error', 'Video type is exists! ');
        }
    }

    public function editVideoType(Request $request , $id)
    {   
        $nameVideoType = VideoType::find($id);
        $checkVideoType = VideoType::where('name', $request->name_videotype)->exists();
        if(!$checkVideoType)
        {
            $nameVideoType->name = $request->name_videotype;
            $nameVideoType->save();
            return redirect()->back()->with('success', 'Edit name video type success!');
        }else{
            return redirect()->back()->with('error', 'Name video type is exists! ');
        }
    }

    // Comment

    public function manageComment()
    {
        $comments = Comment::all();
        return view('admin.manage.comment', compact('comments'));
    }

    public function deleteComment($id)
    {
        $comments = Comment::find($id);
        
        $comments->delete();

        return redirect()->back()->with('success','Delete  comment success!');

    }

    public function manageVote()
    {
        $votes = Vote::all();
        return view('admin.manage.vote', compact('votes'));
    }

    public function adminProfile()
    {
        return view('admin.manage.admin-profile');
    }
}
