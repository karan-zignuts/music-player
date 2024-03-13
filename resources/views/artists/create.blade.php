@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Artist</h1>
        <form action="{{ route('artists.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter artist name">
            </div>
            <button type="submit" class="btn btn-primary">Add Artist</button>
        </form>
    </div>
@endsection
