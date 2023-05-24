<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1 ; $i <= 8 ; $i++){
            Category::create([
                'category' => $faker->city,
            ]);
        }
    }
}
