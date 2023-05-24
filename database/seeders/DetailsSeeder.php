<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Detail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1 ; $i <= 100 ; $i++){
            Detail::create([
                'category_id' => rand(1,8),
                'book_id' => $i
            ]);
        }
    }
}
