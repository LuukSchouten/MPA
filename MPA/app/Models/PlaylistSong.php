<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    protected $table = 'playlist_song';
    
    public $timestamps = false;
    
    protected $fillable = [
        'playlist_id',
        'song_id',
    ];

    // Define any additional relationships or methods as needed
}
