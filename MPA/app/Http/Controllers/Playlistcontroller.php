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
        $user = auth()->user();
        $playlist = $user->playlists;

        return view('playlistsOverview', compact('playlist'));
    }

    //function to edit a playlist
    public function edit(Request $request, $id){
        $playlist = Playlist::findOrFail($id);
        $playlist->name = $request->input('name');
        $playlist->save();
        return redirect('/playlistsOverview');
    }

    public function QueuePlaylistPage(){
        return view('/createQueueplaylist');
    }

    public function CreateQueuePlaylist(Request $request){

    $data = $request->input();

    // Create a new playlist
    $playlist = Playlist::create([
        'name' => $data['name'],
    ]);

    // Get the song IDs from the session
    $songIds = $request->session()->get('queue', []);

    // Attach the songs to the playlist
    $playlist->songs()->attach($songIds);

    return redirect('/playlistsOverview');

    }
    

}

?>