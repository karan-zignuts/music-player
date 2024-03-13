<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;
use Auth;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Auth::user()->playlists()->withCount('songs')->orderBy('created_at', 'desc')->paginate(6);
        return view('playlists.index', compact('playlists'));
    }
    
    public function create()
    {
        // return view('playlists.create');

        $songs = Song::all(); // Retrieve all songs
    return view('playlists.create', compact('songs'));
    }

    public function store(Request $request)
    {
          $request->validate([
            'title' => 'required|string|max:255',
            'selected_songs' => 'required|array',
            'selected_songs.*' => 'exists:songs,id',
        ]);
    
        $playlist = new Playlist();
        $playlist->title = $request->title;
        $playlist->user_id = Auth::id();
        $playlist->save();
    
        // Attach selected songs to the playlist
        $playlist->songs()->attach($request->selected_songs);
    
        return redirect()->route('playlists.index')->with('success', 'Playlist created successfully!');
    }

    public function show(Playlist $playlist)
    {
        // $songs = $playlist->songs()->with('artist')->get();
        // return view('playlists.show', compact('playlist', 'songs'));

        $songs = $playlist->songs()->with('artist')->paginate(6);
        return view('playlists.show', compact('playlist', 'songs'));

    }

    public function edit(Playlist $playlist)
    {
        return view('playlists.edit', compact('playlist'));
    }

    public function update(Request $request, Playlist $playlist)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $playlist->title = $request->title;
        $playlist->save();

        return redirect()->route('playlists.index')->with('success', 'Playlist updated successfully!');
    }

    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return redirect()->route('playlists.index')->with('success', 'Playlist deleted successfully!');
    }

    public function addSong(Playlist $playlist, Request $request)
    {
        $playlist->songs()->attach($request->song_id);
        return redirect()->route('playlists.show', $playlist)->with('success', 'Song added to playlist successfully!');
    }

    public function removeSong(Playlist $playlist, Request $request)
    {
        $playlist->songs()->detach($request->song_id);
        return redirect()->route('playlists.show', $playlist)->with('success', 'Song removed from playlist successfully!');
    }
}
