<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 12 ; $i++) {
            Post::create([
                'title' => $faker->sentence(mt_rand(4,9)),
                'description' => $faker->paragraph(3),
                'author' => $faker->name(),
                'date' => $faker->date(),
                'time' => $faker->time(),
                'category_id' => $faker->numberBetween(1,3),
                'body' => collect($faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),
                'image' => $faker->imageUrl(640, 480, 'books', true),
                'likes' => $faker->numberBetween(1,100)
            ]);
        }
    }
}
