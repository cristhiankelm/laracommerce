<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'title' => 'Men\'s Fashion',
                'slug' => 'mens-fashion',
                'summary' => NULL,
                'photo' => '/storage/photos/1/Category/mini-banner1.jpg',
                'is_parent' => 1,
                'parent_id' => NULL,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 2,
                'title' => 'Women\'s Fashion',
                'slug' => 'womens-fashion',
                'summary' => NULL,
                'photo' => '/storage/photos/1/Category/mini-banner2.jpg',
                'is_parent' => 1,
                'parent_id' => NULL,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 3,
                'title' => 'Kid\'s',
                'slug' => 'kids',
                'summary' => NULL,
                'photo' => '/storage/photos/1/Category/mini-banner3.jpg',
                'is_parent' => 1,
                'parent_id' => NULL,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 4,
                'title' => 'T-shirt\'s',
                'slug' => 't-shirts',
                'summary' => NULL,
                'photo' => NULL,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 5,
                'title' => 'Jeans pants',
                'slug' => 'jeans-pants',
                'summary' => NULL,
                'photo' => NULL,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 6,
                'title' => 'Sweater & Jackets',
                'slug' => 'sweater-jackets',
                'summary' => NULL,
                'photo' => NULL,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => NULL,
                'status' => 'active',
            ],
            [
                'id' => 7,
                'title' => 'Rain Coats & Trenches',
                'slug' => 'rain-coats-trenches',
                'summary' => NULL,
                'photo' => NULL,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => NULL,
                'status' => 'active',
            ]
        ]);
    }
}
