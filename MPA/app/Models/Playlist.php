<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{

    protected $table = 'playlists';

    public $timestamps = false;
    const UPDATED_AT = false;

    protected $fillable = [
        'name'
    ];

}

class Playlist extends Model
{
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}