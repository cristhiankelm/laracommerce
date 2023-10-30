<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_comments')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'post_id' => 2,
                'comment' => 'Testing comment edited',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => NULL,
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'post_id' => 2,
                'comment' => 'testing 2',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => 1,
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'post_id' => 2,
                'comment' => 'That\'s cool',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => 2,
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'post_id' => 2,
                'comment' => 'nice',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => NULL,
            ],
            [
                'id' => 5,
                'user_id' => 3,
                'post_id' => 5,
                'comment' => 'nice blog',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => NULL,
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'post_id' => 3,
                'comment' => 'nice',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => NULL,
            ],
            [
                'id' => 7,
                'user_id' => 2,
                'post_id' => 3,
                'comment' => 'really',
                'status' => 'active',
                'replied_comment' => NULL,
                'parent_id' => 6,
            ],
        ]);
    }
}
