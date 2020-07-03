<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVideoRequest;
use App\Jobs\Videos\ConvertForStreaming;
use App\Jobs\Videos\CreateVideoThumbnail;
use App\User;
use App\Video;
use App\VideoType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadVideoController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $videoType = VideoType::all();

        return view('betube.channel.upload', compact('user', 'videoType'));
    }
    
    public function store(UpdateVideoRequest $request, User $channel)
    {
        $video = $channel->videos()->create([
            'title' => $request->title,
            'path' => $request->video->store("channels/{$channel->id}")
        ]);

        $this->dispatch(new CreateVideoThumbnail($video));

        $this->dispatch(new ConvertForStreaming($video));

        return $video;
    }
    
    public function edit($id)
    {
        $user = User::find(Auth::id());
        
        $video = Video::find($id);
        $videoType = VideoType::all();

        return view('betube.channel.update-video',compact('video', 'user', 'videoType'));
    }

    public function update(UpdateVideoRequest $request, $id)
    {
        $video = Video::find($id);
        $thumbnail = "";

        $arrayPath = explode('/', $video->thumbnail);
        $arrayPath[1] = "public";
        $path = implode("/", $arrayPath); 

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail) {
                Storage::delete("{$path}");
                $thumbnail = $request->thumbnail->store('public/thumbnails');
            }
        }

        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_type_id = $request->videotype;
        $video->thumbnail = Storage::url("{$thumbnail}");
        $video->hashtag = $request->hashtag;
        
        $video->save();

        return redirect()->back();
    }

}