<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Artist;
use Illuminate\Support\file;
use Validator;

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
        $request->validate([
            'title' => 'required', 
            'artist_id' =>'nullable',
            'file_path' => 'nullable|mimes:mp3|max:10240',
        ]);

        $file = $request->file('file_path');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move('uploads/audios/', $fileName);

        $song = new Song();
        $song->title = $request->input('title');
        $song->artist_id = $request->input('artist_id'); // Assigning artist_id instead of artist
        $song->file_path = 'uploads/audios/' . $fileName;
        $song->save(); // Save the song data to the database

        return redirect()->route('songs.index')->with('success', 'File uploaded successfully.');
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

