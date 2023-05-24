<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create();
        for($i = 1 ; $i <= 10 ; $i++){
            Publisher::create([

                "logo" => 'public\img\logo.png',
                "name" => $faker->name,
                "address" => $faker->address,
                "phone" => $faker->phoneNumber,
                "email" => $faker->email
            ]);
        }
    }
}
