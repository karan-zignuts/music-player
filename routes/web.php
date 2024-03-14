<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AudioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        return view('home');
    });

// Route::get('/', [PlaylistController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //playlists
    Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');
    Route::put('/playlists/{playlist}', [PlaylistController::class, 'update'])->name('playlists.update');
    Route::post('/playlists', [PlaylistController::class, 'store'])->name('playlists.store');
    Route::get('/playlists/create', [PlaylistController::class, 'create'])->name('playlists.create');
    Route::get('/playlists/{playlist}', [PlaylistController::class, 'show'])->name('playlists.show');
    Route::get('/playlists/edit/{playlist}', [PlaylistController::class, 'edit'])->name('playlists.edit');
    
    //artists
    Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');    
    Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');    
    Route::get('/artists/edit/{artist}', [ArtistController::class, 'edit'])->name('artists.edit');
    Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('artists.destroy');    
    Route::put('/artists/{artist}', [ArtistController::class, 'update' ])->name('artists.update');

    
    //songs
    Route::post('/songs', [SongController::class, 'store'])->name('songs.store');    
    Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
    Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
    Route::post('/songs/create', [SongController::class,'create'])->name('songs.create');



});

Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');


// Route::get('/upload', [SongController::class, 'upload'])->name('upload');
// Route::post('/upload', [SongController::class, 'uploadPost'])->name('songs.uploadPost');

// Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
// Route::post('/songs/create',[SongController::class,'uploadSong'])->name('songs.uploadSong');

// Route::get('/uploadaudio', [AudioController::class,'upload'])->name('audio.upload');
// Route::post('/uploadaudio', [AudioController::class,'store'])->name('upload.store');


require __DIR__.'/auth.php';

