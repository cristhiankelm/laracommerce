<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_tags')->insert([
            [
                'id' => 1,
                'title' => 'Enjoy',
                'slug' => 'enjoy',
                'status' => 'active',
                'created_at' => '2020-08-14 01:53:52',
                'updated_at' => '2020-08-14 01:53:52',
            ],
            [
                'id' => 2,
                'title' => '2020',
                'slug' => '2020',
                'status' => 'active',
                'created_at' => '2020-08-14 01:54:09',
                'updated_at' => '2020-08-14 01:54:09',
            ],
            [
                'id' => 3,
                'title' => 'Visit nepal 2020',
                'slug' => 'visit-nepal-2020',
                'status' => 'active',
                'created_at' => '2020-08-14 01:54:33',
                'updated_at' => '2020-08-14 01:54:33',
            ],
            [
                'id' => 4,
                'title' => 'Tag',
                'slug' => 'tag',
                'status' => 'active',
                'created_at' => '2020-08-15 06:59:31',
                'updated_at' => '2020-08-15 06:59:31',
            ],
        ]);
    }
}
