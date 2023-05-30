<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\SongsInSession;
use Illuminate\Support\Facades\Session;


class Sessioncontroller extends controller{

    //shows the song items in the queue, asks for playlist name and shows submit btn
    public function storeSession($id){
        $SS = new SongsInSession();
        // dd($SS, Session::all() );

        $songs = $SS->AddToSession($id);   // [1,2,3]

        return redirect()->back(); 
    
    }

    public function showSession() {
        $sp = new SongsInSession();
        $songs = $sp->GetSongs();   // gets us a collection of Song models

        $totalLength = 0;
    
        foreach ($songs as $song) {
            // Assuming the length is stored in the 'length' field of each song
            $songLength = strtotime($song['length']);
            $totalLength += $songLength;
        }

        $formattedTotalLength = gmdate('H:i:s', $totalLength);

        return view('queue', [
            'songs' => $songs,
            'formattedTotalLength' => $formattedTotalLength
        ]);
    }

    
}

?>