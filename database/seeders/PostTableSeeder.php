<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //khởi tạo đối tượng  faker
        $faker = Faker::create();
        // chạy vòng lặp xac dinh so ban ghi va keu du lieu tu faker
        for ($i = 0; $i<50;$i++) {
            Post::create([
                'title' => $faker->sentence(6, true),
                'content' => $faker->paragraphs(3, true)
            ]);
        }
    }
}
