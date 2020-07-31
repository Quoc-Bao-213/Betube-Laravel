<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\PlaylistDetail;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $playlists = Playlist::where('user_id', Auth::id())->get();

        return view('betube.channel.playlist', compact('user', 'playlists'));
    }

    public function show($id)
    {
        $playlistDetails = PlaylistDetail::where('playlist_id', $id)->get();
        $user = User::find(Auth::id());
        $playlist = Playlist::find($id);

        if ($user->id === $playlist->user_id)
            return view('betube.channel.edit-playlist', compact('playlistDetails', 'playlist', 'user'));
        return redirect()->route('about-me', $playlist->user_id);
    }

    public function getPlaylists($id)
    {   
        $user = User::find($id);

        return $user->playlists()->paginate(25);
    }

    public function create()
    {
        return auth()->user()->playlists()->create([
            'name' => request()->name
        ]);
    }

    public function addingToPlaylist($playlistID, $videoID)
    {
        $playlistDetail = new PlaylistDetail();

        $playlistDetail->playlist_id = $playlistID;
        $playlistDetail->video_id = $videoID;
        $playlistDetail->save();

        return response()->json([
            'id' => $playlistDetail->id,
            'playlist_id' => $playlistID,
            'video_id' => $videoID
        ]);
    }

    public function editPlaylist($id) 
    {
        $playlist = Playlist::find($id);

        if (isset(request()->name))
            $playlist->name = request()->name;

        if (isset(request()->description))
            $playlist->description = request()->description;

        $playlist->save();

        return response()->json(['Edit Success']);
    }

    public function updatePlaylistDetail(Request $request) 
    {
        PlaylistDetail::truncate();

        foreach($request->playlistDetails as $playlistDetail) {
            PlaylistDetail::create([
                'id' => $playlistDetail['id'],
                'playlist_id' => $playlistDetail['playlist_id'],
                'video_id' => $playlistDetail['video_id'],
            ]);
        }

        return response('update success.', 200);
    }

    public function deletePlaylist($id)
    {
        $playlist = Playlist::find($id);

        $playlist->delete();

        return redirect()->route('home');
    }

    public function destroy($playlistDetailID)
    {
        $playlistDetail = PlaylistDetail::find($playlistDetailID);

        $playlistDetail->delete();

        return response()->json(['Delete Success']);
    }
}
