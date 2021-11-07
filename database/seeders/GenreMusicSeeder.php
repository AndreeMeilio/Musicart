<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GenreMusic;

class GenreMusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_genre_music = [
            'Jazz',
            'Gospel',
            'Blues',
            'Rhythm',
            'Funk',
            'Rock',
            'Metal', 
            'Hardcore',
            'Electronic',
            'Reggae',
            'Rap',
            'Pop'
        ];

        for ($i = 0; $i < sizeof($nama_genre_music); $i++){
            GenreMusic::create([
                "id_genre_music"    => uniqid('gm'),
                "nama_genre_music"  => $nama_genre_music[$i]
            ]); 
        }
    }
}
