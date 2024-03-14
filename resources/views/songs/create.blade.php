{{-- @extends('layouts.app')

@section('content')
<a href="{{ route('songs.index')  }}" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i></a>

    <div class="container">
        <h1>Add Song</h1>
        <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter song title">
            </div>
            <div class="form-group">
                <label for="artist_id">Artist</label>
                <select class="form-control" id="artist_id" name="artist_id">
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="song_file">Song File</label>
                <input type="file" class="form-control-file" id="file_path" name="file_path">
            </div>
            <button type="submit" class="btn btn-primary">Add Song</button>
        </form>
            
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('songs.index') }}" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i> </a>
        <div class="card mt-4 shadow">
            <div class="card-header  text-dark">
                <h3 class="mb-0">Add Song</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter song title">
                    </div>
                    <div class="form-group">
                        <label for="artist_id">Artist</label>
                        <select class="form-control" id="artist_id" name="artist_id">
                            @foreach($artists as $artist)
                                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="song_file">Song File</label>
                       
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_path" name="file_path">
                            <label class="custom-file-label" for="file_path"></label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Add Song</button>
                </form>
            </div>
        </div>
    </div>
@endsection
