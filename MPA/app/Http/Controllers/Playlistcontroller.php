<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Playlist;
use App\Models\Song;

class Playlistcontroller extends controller{

    //READ
    public function read(){
        $playlist = Playlist::all();
        return view('playlistsOverview')->with('playlist', $playlist);
    }

    //CREATE
    public function create(Request $request){

        $data = $request->input();

        DB::table('playlists')->insert([
            'name' => $data['name'],
        ]);

        return redirect('/playlistsOverview');
    }
}

?>