<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVideoRequest;
use App\Jobs\Videos\ConvertForStreaming;
use App\Jobs\Videos\CreateVideoThumbnail;
use App\User;
use App\Video;
use App\VideoType;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadVideoController extends Controller
{

    public function index($id)
    {
        $user = User::find($id);
        $videoType = VideoType::all();

        if (Auth::id() === $id)
            return view('betube.channel.upload', compact('user', 'videoType'));
        return view('betube.channel.about-me', compact('user'));
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
        $authorID = Auth::id();
        $user = User::find($authorID);
        $video = Video::where('id', $id)->where('user_id', $authorID)->first(); 
        $videoType = VideoType::all();

        if (!empty($video))
            return view('betube.channel.update-video',compact('video', 'user', 'videoType'));
        return view('betube.channel.about-me', compact('user'));
    }

    public function update(UpdateVideoRequest $request, $id)
    {
        $video = Video::find($id);
        
        $arrayPath = explode('/', $video->thumbnail);
        $arrayPath[1] = "public";
        $path = implode("/", $arrayPath); 

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail) {
                Storage::delete("{$path}");
                $thumbnail = $request->thumbnail->store('public/thumbnails');
            }
            $video->thumbnail = Storage::url("{$thumbnail}");
        }
        
        if ($request->hashtag) {
            $arrayHashTags = explode(' ', $request->hashtag);

            if (count($arrayHashTags) > 3)
                return redirect()->back()->with('errorHashTag', 'Only 3 hashtags and must have a hashtag!');

            $hashTag = "";

            for ($i = 0; $i < count($arrayHashTags); $i++){
                $characters = substr($arrayHashTags[$i], 0, 1);
                if ($characters === "#") {
                    $hashTag .= $arrayHashTags[$i].' ';
                } else {
                    $hashTag .= '';
                }
            }
        }
        
        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_type_id = $request->videotype;
        
        $video->hashtag = trim($hashTag);
        
        $video->save();

        return redirect()->back();
    }

}