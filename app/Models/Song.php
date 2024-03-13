<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'artist_id', 'file_path'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'song_playlist');
    }
}
