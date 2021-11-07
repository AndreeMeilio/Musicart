<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
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
            Admin::create([
                "id_admin"   => uniqid("adm"),
                "fullname"  => $faker->name(),
                "username"  => $faker->userName,
                "email"     => $faker->freeEmail,
                "password"  => Hash::make('12345678')
            ]);
        }
    }
}
