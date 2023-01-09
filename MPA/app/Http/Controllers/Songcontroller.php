<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Models\Playlist;

class Songcontroller extends controller{


    //function to create a new song
    public function create(Request $request){
        $song = new Song();
        $song->name = $request->name;
        $song->genre = $request->genre;
        $song->length = $request->length;
        $song->author = $request->author;
        $song->save();
        return redirect()->back();
    }

    //function to show the songs on the overview page
    public function read(Request $request){
        $genre = Song::all();

        if($request->genre){
            $song = Song::where('genre', $request->genre)->get();
        }else{
            $song = Song::all();
        }
        
        return view('songsOverview')
            ->with('song', $song)
            ->with('genre', $genre);
    }

    //function to edit the songs
    public function edit(Request $request, $id){
        $song = Song::findOrFail($id);
        $song->name = $request->input('name');
        $song->genre = $request->input('genre');
        $song->length = $request->input('length');
        $song->author = $request->input('author');
        $song->save();
        return redirect('/songsOverview');
    }

    //add the song to the selected playlist
    public function addToPlaylist(Request $request,$id){
        $song = Song::findOrFail($id);
        $song->playlist_id = $request->input('playlist_id');
        $song->save();
        return redirect('/songsOverview');
    }

}
?>