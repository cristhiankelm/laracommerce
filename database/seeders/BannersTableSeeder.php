<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'id' => 1,
                'title' => 'Lorem Ipsum is',
                'slug' => 'lorem-ipsum-is',
                'photo' => '/storage/photos/1/Banner/banner-01.jpg',
                'description' => '<h2><span style="font-weight: bold; color: rgb(99, 99, 99);">Up to 10%</span></h2>',
                'status' => 'active',
            ],
            [
                'id' => 2,
                'title' => 'Lorem Ipsum',
                'slug' => 'lorem-ipsum',
                'photo' => '/storage/photos/1/Banner/banner-07.jpg',
                'description' => '<p>Up to 90%</p>',
                'status' => 'active',
            ],
            [
                'id' => 3,
                'title' => 'Banner',
                'slug' => 'banner',
                'photo' => '/storage/photos/1/Banner/banner-06.jpg',
                'description' => '<h2><span style="color: rgb(156, 0, 255); font-size: 2rem; font-weight: bold;">Up to 40%</span><br></h2><h2><span style="color: rgb(156, 0, 255);"></span></h2>',
                'status' => 'active',
            ],
        ]);
    }
}
