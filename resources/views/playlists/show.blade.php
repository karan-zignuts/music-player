@extends('layouts.app')

@section('content')
<a href="{{ route('playlists.index')  }}" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i></a>
    <div class="container">
        <h1>{{ $playlist->title }}</h1>
        <div class="row">
            @foreach($songs as $song)
                <div class="col-md-4 mb-3">
                    <div class="card shadow music-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">Artist: {{ $song->artist->name }}</p>
                            <p class="card-text">Category: {{ $song->artist->category }}</p>
                            <audio controls class="audio-player">
                                <source src="{{ asset($song->file_path) }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $songs->links() }}
    </div>
@endsection
