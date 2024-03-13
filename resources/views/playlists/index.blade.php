     @extends('layouts.app')

     @section('content')
         <div class="container">
             <h1>My Playlists</h1>
             <a href="{{ route('playlists.create') }}" class="btn btn-primary mb-3">Create Playlist</a>
             <div class="row">
                 @foreach ($playlists as $playlist)
                     <div class="col-md-4 mb-3">
                         <div class="card">
                             @if ($playlist->image_url)
                                 <img src="{{ $playlist->image_url }}" class="card-img-top" alt="Playlist Image">
                             @else
                                 <img src="https://images.unsplash.com/photo-1520446266423-6daca23fe8c7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-  4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     class="card-img-top" alt="Placeholder Image">
                             @endif
                             <div class="card-body">
                                 <h5 class="card-title">{{ $playlist->title }}</h5>
                                 <p class="card-text">Songs: {{ $playlist->songs_count }}</p>
                                 <a href="{{ route('playlists.show', $playlist) }}" class="btn btn-primary">View
                                     Playlist</a>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>

             {{ $playlists->links() }}

         </div>
     @endsection
