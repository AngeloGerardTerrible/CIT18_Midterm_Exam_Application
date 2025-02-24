<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    public function run()
    {
        Anime::create([
            'title' => 'Attack on Titan',
            'genre' => 'Action, Dark Fantasy',
            'episodes' => 88,
        ]);

        Anime::create([
            'title' => 'Demon Slayer',
            'genre' => 'Action, Fantasy',
            'episodes' => 45
        ]);

        Anime::create([
            'title' => 'My Hero Academia',
            'genre' => 'Superhero, Action',
            'episodes' => 138
        ]);

        Anime::create([
            'title' => 'Fullmetal Alchemist: Brotherhood',
            'genre' => 'Action, Adventure, Fantasy',
            'episodes' => 64
        ]);

        Anime::create([
            'title' => 'One Piece',
            'genre' => 'Action, Adventure, Comedy',
            'episodes' => 1000
        ]);
    }
}
