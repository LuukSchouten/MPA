<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Songcontroller;
use App\Http\Controllers\Playlistcontroller;

use App\Models\Song;
use App\Models\Playlist;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/songsOverview', [Songcontroller::class, 'read']);

Route::get('/song/{song}', function($id){
    $song = Song::findOrFail($id);
    $playlist = Playlist::all();
    return view('song')
        ->with('song', $song)
        ->with('playlist', $playlist);
});

Route::get('createSong', function(){
    return view('createSong');
});

Route::post('createSong', [Songcontroller::class, 'create']);

Route::get('/editSong/{song}' , function($id){
    $song = Song::findOrFail($id);
    return view('editSong')
        ->with('song', $song);
});

Route::post('/editSong/{song}', [Songcontroller::class, 'edit']);

Route::get('/deleteSong/{song}', function($id){
    $song = Song::findOrFail($id);
    Song::where('id', $id)->delete();
    return redirect()->back();
});

Route::get('/playlistsOverview', [Playlistcontroller::class, 'read']);

Route::get('/editPlaylist/{playlist}' , function($id){
    $playlist = Playlist::findOrFail($id);
    
    return view('editPlaylist')
        ->with('playlist', $playlist);
    });

Route::post('/editPlaylist/{playlist}', [Playlistcontroller::class, 'edit']);

Route::post('/addToPLaylist/{song}', [Songcontroller::class, 'addToPlaylist']);

Route::get('/playlist/{playlist}', function($id){
    $playlist = Playlist::findOrFail($id);
    $songs = Song::where("playlist_id", $id)->get();
    $totalTime = DB::select("SELECT  SEC_TO_TIME( SUM( TIME_TO_SEC( `length` ) ) ) AS timeSum FROM songs where playlist_id = '$id'");

    return view('playlist')
        ->with('playlist', $playlist)
        ->with('songs', $songs)
        ->with('totalTime', $totalTime);
});

Route::get('/createPlaylist', function() {
    return view('createPlaylist');
});

Route::post('/createPlaylist', [Playlistcontroller::class, 'create']);

Route::get('/deletePlaylist/{playlist}', function($id){
    $playlist = Playlist::findOrFail($id);
    Playlist::where('id', $id)->delete();
    return redirect()->back();
});

Route::get('/deletefromPlaylist/{song}', function($id){
    $song = Song::findOrFail($id);
    Song::where('id', $id)->update(["playlist_id" => 0]);;
    return redirect()->back();
});