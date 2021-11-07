<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Playlist;
use Faker\Factory;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_user = User::limit(10)->get();
        $id_data_user = array();

        foreach($data_user as $item){
            array_push($id_data_user, $item->id_user);
        }

        $faker = Factory::create('id_ID');

        for ($i = 0; $i < sizeof($id_data_user); $i++){
            Playlist::create([
                "id_playlist"   => uniqid('pl'),
                "id_user"       => $id_data_user[$i],
                "nama_playlist" => $faker->word,
                "desc_playlist" => $faker->realText
            ]);
        }
    }
}
