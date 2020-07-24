<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\PlaylistDetail;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Auth;

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

    public function destroy($playlistDetailID)
    {
        $playlistDetail = PlaylistDetail::find($playlistDetailID);

        $playlistDetail->delete();

        return response()->json(['Delete Success']);
    }
}
