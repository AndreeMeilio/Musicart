<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for($i = 1; $i <= 25; $i++){
            User::create([
                "id_user"   => uniqid("user"),
                "fullname"  => $faker->name(),
                "username"  => $faker->userName,
                "email"     => $faker->freeEmail,
                "password"  => Hash::make('12345678')
            ]);
        }
    }
}
