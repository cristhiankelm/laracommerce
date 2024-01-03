<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'summary' => null,
                'photo' => '/storage/photos/1/Category/mini-banner1.jpg',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Women\'s Fashion',
                'slug' => 'womens-fashion',
                'summary' => null,
                'photo' => '/storage/photos/1/Category/mini-banner2.jpg',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Kid\'s',
                'slug' => 'kids',
                'summary' => null,
                'photo' => '/storage/photos/1/Category/mini-banner3.jpg',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'T-shirt\'s',
                'slug' => 't-shirts',
                'summary' => null,
                'photo' => null,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Jeans pants',
                'slug' => 'jeans-pants',
                'summary' => null,
                'photo' => null,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Sweater & Jackets',
                'slug' => 'sweater-jackets',
                'summary' => null,
                'photo' => null,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Rain Coats & Trenches',
                'slug' => 'rain-coats-trenches',
                'summary' => null,
                'photo' => null,
                'is_parent' => 0,
                'parent_id' => 1,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
            ],
        ]);
    }
}
