@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Song</h1>
        <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter song title">
            </div>
            <div class="form-group">
                <label for="artist_id">Artist</label>
                <select class="form-control" id="artist_id" name="artist_id">
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="song_file">Song File</label>
                <input type="file" class="form-control-file" id="song_file" name="song_file">
            </div>
            <button type="submit" class="btn btn-primary">Add Song</button>
        </form>
    </div>
@endsection
