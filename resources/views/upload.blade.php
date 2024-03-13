@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="audio_file">
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection
