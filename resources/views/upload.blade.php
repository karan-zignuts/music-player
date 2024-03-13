@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('songs.uploadPost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="audiofile">Upload Audio</label>
            <input type="file" name="file" id="audiofile">
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection
