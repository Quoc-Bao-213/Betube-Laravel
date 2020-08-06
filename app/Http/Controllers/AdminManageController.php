<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\AdminManagePlaylistRequest;
use App\Http\Requests\AdminManageUserRequest;
use App\Http\Requests\AdminManageVideoTypeRequest;
use App\Playlist;
use App\PlaylistDetail;
use App\Subscription;
use App\User;
use App\Video;
use App\VideoType;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function indexEditUser($id)
    {
        $user = User::find($id);
        return view('admin.manage.edit-user', compact('user'));
    }

    public function addUser(AdminManageUserRequest $request)
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

    public function editUser(AdminManageUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->channel_name =  $request->channel_name;
        $user->description = $request->description;
        $user->save();

        return redirect()->back()->with('success', 'Edit user success!');
    }


    public function deleteUser($id)
    {  
       DB::table('users')->where('id',$id)->delete();
       DB::table('subscriptions')->where('id',$id)->delete();
       return redirect()->back()->with('success', 'Delete user success!');
    }

    // Subscription
    
    public function manageSubscription()
    {   
        $user = user::all();
        $subscriptions = Subscription::whereIn('user_subscribe', $user->modelKeys())
        ->whereIn('user_id', $user->modelKeys())->get();

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

    public function indexEditVideo($id)
    {
        $video = Video::find($id);
        $videoTypes = VideoType::all();
        return view('admin.manage.edit-video', compact('video' ,'videoTypes'));
    }

    public function editVideo(Request $request,$id)
    {
        $video = Video::find($id);
        
        $video->video_type_id = $request->video_type_id;
        $video->title = $request->title;
        $video->description = $request->description;
        $video->total_views = $request->total_views;
        $video->hashtag = $request->hashtag;
        $video->save();

        return redirect()->back()->with('success','Edit video success!');
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

    public function addVideoType(AdminManageVideoTypeRequest $request)
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

    // Playlist

    public function managePlaylist()
    {
        $playlists = Playlist::all();
        return view('admin.manage.playlist', compact('playlists'));
    }

    public function indexAddPlaylist()
    {
        $users = User::all();
        return view('admin.manage.add-playlist', compact('users'));
    }

    public function indexEditPlaylist($id)
    {
        $users = User::all();
        $playlist = Playlist::find($id);
        
        return view('admin.manage.edit-playlist', compact('users', 'playlist'));
    }

    public function addPlaylist(AdminManagePlaylistRequest $request)
    {
        $playlist = new Playlist;

        $playlist->name = $request->name;
        $playlist->description = $request->description;
        $playlist->user_id = $request->user_id;
        $playlist->save();

        return redirect()->back()->with('success','Add playlist success!');
    }

    public function editPlaylist(Request $request, $id)
    {
        $playlist = Playlist::find($id);
        
        $playlist->name = $request->name;
        $playlist->description = $request->description;
        $playlist->user_id = $request->user_id;
        $playlist->save();

        return redirect()->back()->with('success', 'Edit playlist success!');

    }

    public function deletePlaylist($id)
    {
        $playlist = Playlist::find($id);
        $playlist->delete();

        return redirect()->back()->with('success','Delete playlist success!');
    }

    // Playlist Details
    public function managePlaylistDetail()
    {
        $playlistDetails = PlaylistDetail::all();
        return view('admin.manage.playlist-details', compact('playlistDetails'));
    }

    public function deletePlaylistDetail($id)
    {
        $playlistDetail = PlaylistDetail::find($id);
        $playlistDetail->delete();
        return redirect()->back()->with('success','Delete playlist detail success!');
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

    // Vote

    public function manageVote()
    {
        $votes = Vote::all();
        return view('admin.manage.vote', compact('votes'));
    }

}
