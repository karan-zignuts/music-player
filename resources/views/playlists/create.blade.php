{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Playlist</h1>
        <form action="{{ route('playlists.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter playlist title">
            </div>
            <button type="submit" class="btn btn-primary">Create Playlist</button>
        </form>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Playlist</h1>
        <form action="{{ route('playlists.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter playlist title">
            </div>

            <h2>Select Songs</h2>
            <div class="form-group">
                @foreach($songs as $song)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="selected_songs[]" value="{{ $song->id }}">
                        <label class="form-check-label" for="selected_songs_{{ $song->id }}">
                            {{ $song->title }} - {{ $song->artist->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Create Playlist</button>
        </form>
    </div>
@endsection

