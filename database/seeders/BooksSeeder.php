<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1 ; $i <= 20 ; $i++){
            Book::create([
                'Publisher_id' => rand(1, 10),
                'cover' => 'public\img\cover.png',
                'title' => $faker->sentence,
                'author' => $faker->name,
                'synopsis' => $faker->paragraph,
                'year'=>$faker->date($format = 'Y', $max = "now")
            ]);
        }
    }
}
