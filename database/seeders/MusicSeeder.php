<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Music;
use App\Models\GenreMusic;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $judul_music = array(
            'Darkside',
            'Solo',
            'Haru Haru',
            'Symphony',
            'Braveshine',
            'Go away',
            'On my way',
            'The beginning',
            'Renegading',
            'Levitating'
        );

        $artist = array(
            'Alan Walker',
            'Clean Bandit',
            'BIGBANG',
            'Clean Bandit',
            'Aimer',
            'Chanyoul, Punch',
            'Alan Walker',
            'ONE OK ROCK',
            'ONE OK ROCK',
            'Dua Lipa'
        );

        $featured_artist = array(
            'Tomine Harket, Au/Ra',
            'Demi Lovato',
            '-',
            'Zara Larsson',
            '-',
            '-',
            'Sabrina Carpenter, Farruko',
            '-',
            '-',
            'DaBaby'
        );

        $album = array(
            'Different World',
            'What Is Love?',
            'Number 1',
            'Symphony [Remixes]',
            'DAWN',
            'Dr. Romantic 2 OST Part.3',
            '-',
            'Jinsei × Boku =',
            'Renegades (International Version)',
            'Future Nostalgia'
        );

        $released = array(
            '2018',
            '2018',
            '2008',
            '2017',
            '2015',
            '2020',
            '2019',
            '2013',
            '2021',
            '2020'
        );

        $genre_music = GenreMusic::all();

        $collect_genre_music = array();

        foreach($genre_music as $item){
            array_push($collect_genre_music, $item->id_genre_music);
        }

        $collect_genre_music = collect($collect_genre_music);

        for ($i = 0; $i < sizeof($judul_music); $i++){
            Music::create([
                "id_music"          => uniqid('msc'),
                "id_genre_music"    => $collect_genre_music->random(),
                "judul_music"       => $judul_music[$i],
                "artist"            => $artist[$i],
                "featured_artist"   => $featured_artist[$i],
                "album"             => $album[$i],
                "released"          => $released[$i]
            ]);
        }
    }
}
