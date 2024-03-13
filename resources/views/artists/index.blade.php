@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Artists</h1>
        <a href="{{ route('artists.create') }}" class="btn btn-primary mb-3">Add Artist</a>

        <ul class="list-group">
            @foreach ($artists as $artist)
                <li class="list-group-item">{{ $artist->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
