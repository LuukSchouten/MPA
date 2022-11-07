<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Models\Playlist;

class Songcontroller extends controller{

    public function create(Request $request){

        
        $song = new Song();
        $song->name = $request->name;
        $song->genre = $request->genre;
        $song->length = $request->length;
        $song->author = $request->author;
        $song->save();
        return redirect()->back();
    }

    public function read(){
        $song = Song::all();
        return view('songsOverview')
            ->with('song', $song);
    }

}
?>