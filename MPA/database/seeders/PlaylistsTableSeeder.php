<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlists = [
            [
                'id' => 1,
                'name' => 'Playlist 1',
            ],
            [
                'id' => 2,
                'name' => 'Playlist 2',
            ],
            // Add more playlists as needed
        ];

        DB::table('playlists')->insert($playlists);
    }
}