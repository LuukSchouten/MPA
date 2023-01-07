<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Playlist;
use App\Models\Song;

class Playlistcontroller extends controller{

       //function to create a playlist
       public function create(Request $request){

        $data = $request->input();

        DB::table('playlists')->insert([
            'name' => $data['name'],
        ]);

        return redirect('/playlistsOverview');
    }

    //function to show all playlists on the playlistsOverview page
    public function read(){
        $playlist = Playlist::all();
        return view('playlistsOverview')->with('playlist', $playlist);
    }

    //function to edit a playlist
    public function edit(Request $request, $id){
        $playlist = Playlist::findOrFail($id);
        $playlist->name = $request->input('name');
        $playlist->save();
        return redirect('/playlistsOverview');
    }


}

?>