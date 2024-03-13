{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $playlist->title }}</h1>
        <div class="row">
            @foreach($songs as $song)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">Artist: {{ $song->artist->name }}</p>
                            <audio controls>
                                <source src="{{ asset('audio/better-day-186374.mp3') }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $songs->links() }}
    </div>
@endsection --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $playlist->title }}</h1>
        <div class="row">
            @foreach($songs as $song)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">Artist: {{ $song->artist->name }}</p>
                            <audio controls>
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
