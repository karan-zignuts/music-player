@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">All Artists</h1>
    <a href="{{ route('artists.create') }}" class="btn btn-primary mb-3">Add Artist</a>

    <div class="row">
        @foreach ($artists as $artist)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $artist->name }}</h5>
                    <div class="btn-group" role="group" style="row-gap: 2">
                        <!-- Edit Button -->
                        <a href="{{ route('artists.edit', $artist) }}" class="btn btn-info btn-sm mr-2">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('artists.destroy', $artist) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this artist?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
