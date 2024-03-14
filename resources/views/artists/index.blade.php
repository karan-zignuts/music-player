@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">All Artists</h1>
    <a href="{{ route('artists.create') }}" class="btn btn-primary mb-3">Add Artist</a>

    <div class="row">
        @foreach ($artists as $artist)
        <div class="col-md-4 mb-3">
            <div class="card shadow artist-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $artist->name }}</h5>
                    <p class="card-text"><strong>Category:</strong> {{ $artist->category }}</p>
                    <div class="btn-group gap-2" role="group">
                        <a href="{{ route('artists.edit', $artist) }}" class="btn btn-info btn-sm mr-2"><i class="fa-solid fa-pen"></i></a>
                        <form action="{{ route('artists.destroy', $artist) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this artist?')"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
