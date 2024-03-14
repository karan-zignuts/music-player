@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Home</h1>
    </div>
@endsection

{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Songs</h1>
        <a href="{{ route('songs.create') }}" class="btn btn-primary mb-3">Add Song</a>

        <div class="row">
            @foreach ($songs as $song)
                <div class="col-md-4 mb-3">
                    <div class="card shadow music-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">Artist: {{ $song->artist->name }}</p>
                            <p class="card-text">Category: {{ $song->artist->category }}</p>
                            <div class="d-flex align-items-center mb-3 gap-2">
                                <audio controls class="mr-2">
                                    <source src="{{ asset($song->file_path) }}" type="audio/mp3">
                                </audio>
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-heart"></i> Like</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}
