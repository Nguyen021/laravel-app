<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Image;
use Database\Seeders\Bluemmb\Faker\PicsumPhotosProvider;

class ImageTableSeeder extends Seeder
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
            Image::create([

                'url' => $faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'

            ]);
        }
    }
}
