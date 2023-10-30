<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_categories')->insert([
            [
                'id' => 1,
                'title' => 'Travel',
                'slug' => 'contrary',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Electronics',
                'slug' => 'richard',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Cloths',
                'slug' => 'cloths',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'enjoy',
                'slug' => 'enjoy',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Post Category',
                'slug' => 'post-category',
                'status' => 'active',
                'created_at' => now(),
            ],
        ]);
    }
}
