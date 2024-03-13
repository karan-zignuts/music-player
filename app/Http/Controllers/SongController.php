<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Artist;
use Illuminate\Support\file;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('artist')->get();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('songs.create', compact('artists'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            // 'song_file' => '', 
        ]);

        // dd($request->all());
        $file = $request->file('song_file'); 
        $fileName = time() . '_' . $file->getClientOriginalName();
        // $filePath = $file->storeAs('uploads', $fileName);
        $file->move(public_path('uploads'), $fileName);

        return redirect()->back()->with('success', 'Song uploaded successfully.');
    }

    public function edit(Song $song)
    {
        $artists = Artist::all();
        return view('songs.edit', compact('song', 'artists'));
    }

    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $song->title = $request->title;
        $song->artist_id = $request->artist_id;
        $song->save();

        return redirect()->route('songs.index')->with('success', 'Song updated successfully!');
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully!');
    }
  
}

