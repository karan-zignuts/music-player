@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Songs</h1>
        <a href="{{ route('songs.create') }}" class="btn btn-primary mb-3">Add Song</a>

        <div class="row">
            @foreach ($songs as $song)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">Artist: {{ $song->artist->name }}</p>
                            <audio controls>
                                <source src="{{ asset($song->file_path) }}" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
