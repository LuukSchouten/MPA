<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = [
            [
                'id' => 1,
                'name' => 'Song 1',
                'genre' => 'Genre 1',
                'author' => 'Author 1',
                'length' => '00:04:30',
            ],
            [
                'id' => 2,
                'name' => 'Song 2',
                'genre' => 'Genre 2',
                'author' => 'Author 2',
                'length' => '00:03:45',
            ],
            // Add more songs as needed
        ];

        DB::table('songs')->insert($songs);
    }
}