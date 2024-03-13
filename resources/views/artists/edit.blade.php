@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Artist</h1>
        <form action="{{ route('artists.update', $artist) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $artist->name }}">
            </div>
            <!-- Add more form fields as needed -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
