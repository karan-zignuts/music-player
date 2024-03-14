@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('artists.index') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Edit Artist</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('artists.update', $artist) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="mb-1">Update Name</label>
                                <input type="text" class="form-control mb-2" id="name" name="name"
                                    value="{{ $artist->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
