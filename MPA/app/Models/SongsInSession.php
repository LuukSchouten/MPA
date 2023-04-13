<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class SongsInSession extends Model
{
    use HasFactory;

    private $items = Array();     //  [1, 4, 6]

    public function __construct(){
       
        if (! Session::exists('queue') || Session::get('queue') == null) {
            // if there is no current 'playlist' item in the session, create one
            Session::put('queue', $this->items);
            $this->saveToSession();
        } else {
            // retrieve existing session
            $this->items = Session::get('queue');
        }
    }

    function GetSongIDs() {
        return $this->items;
    }

    function AddToSession($id) {
        array_push($this->items, $id);
        $this->items = ($this->items);
        $this->saveToSession();
    }

    function GetSongs() {
        $song_ids = $this->GetSongIDs();
        $songs = [];

        foreach($song_ids as $id) {
            $song = Song::find($id);
            if ($song != null) {
                $songs[] = $song;
            }
        }

        return collect($songs);
    }

    function saveToSession() {
        Session::put('queue', $this->items);
        Session::save();        // when using dd, session is not saved, therefore this manual save
    }

}
