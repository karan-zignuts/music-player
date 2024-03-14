@extends('layouts.app')

@section('content')
    <a href="{{ route('playlists.index') }}" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i></a>

    <div class="container mt-4">
        <h1>Create Playlist</h1>
        <form action="{{ route('playlists.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter playlist title">
            </div>
            <br>
            <h4>Select Songs</h4>
            <div class="form-group">
                <div class="row">
                    @foreach ($songs as $song)
                        <div class="col-lg-4 mb-3">
                            <div class="custom-card">
                                <div class="custom-card-body">
                                    <input class="form-check-input" type="checkbox" name="selected_songs[]"
                                        value="{{ $song->id }}" id="song_{{ $song->id }}">
                                    <label class="form-check-label" for="song_{{ $song->id }}">
                                        <h5 class="custom-card-title">{{ $song->title }}</h5>
                                        <p class="custom-card-text mb-0">Artist: {{ $song->artist->name }}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Playlist</button>
        </form>
    </div>
@endsection
