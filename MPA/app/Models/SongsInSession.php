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
        $queue = session('queue');
    
        $key = array_search($id, $queue);
    
        if ($key !== false) {
            return redirect()->back()->with('message', 'song already added to queue!');
        }else{
            array_push($this->items, $id);
            $this->items = ($this->items);
            $this->saveToSession();
            return redirect()->back()->with('message', 'song added to queue!');
        }
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
        Session::save();      
    }

}
