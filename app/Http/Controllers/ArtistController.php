<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' =>'required'
        ]);

        $artist = new Artist();
        $artist->name = $request->name;
        $artist->category = $request->category;
        $artist->save();

        return redirect()->route('artists.index')->with('success', 'Artist created successfully!');
    }

    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $artist->name = $request->name;
        $artist->save();

        return redirect()->route('artists.index')->with('success', 'Artist updated successfully!');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists.index')->with('success', 'Artist deleted successfully!');
    }
}
