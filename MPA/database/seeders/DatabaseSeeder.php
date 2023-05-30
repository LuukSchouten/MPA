<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            SongsTableSeeder::class,
            PlaylistsTableSeeder::class,
            // Add more seeders as needed
        ]);
    }  
}
