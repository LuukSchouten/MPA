<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $table = 'songs';

    public $timestamps = false;
    const UPDATED_AT = false;

    protected $fillable = [
        'name',
        'genre',
        'length',
        'author',
        'playlist_id'
    ];
}
