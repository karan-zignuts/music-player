@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Playlist</h1>

        <form method="POST" action="{{ route('playlists.update', $playlist->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $playlist->title }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Playlist</button>
        </form>
    </div>
@endsection
