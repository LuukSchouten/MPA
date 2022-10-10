<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Songcontroller;
use App\Http\Controllers\Testcontroller;

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

Route::get('/songsOverview', [Songcontroller::class, 'overview']);

Route::get('/song/{song}', function($id){
    $song = Song::findOrFail($id);
    return view('song')->with('song', $song);
});

Route::get('/playlistsOverview', function() {
    return view('playlistsOverview');
});

Route::get('/createPlaylist', function() {
    return view('createPlaylist');
});

Route::post('/createPlaylist', [Testcontroller::class, 'create']);