<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongPlaylist extends Model
{
    use HasFactory;

    protected $table = 'song_playlist';

    protected $fillable = ['song_id', 'playlist_id'];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
