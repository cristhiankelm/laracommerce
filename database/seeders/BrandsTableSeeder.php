<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'id' => 1,
                'title' => 'Adidas',
                'slug' => 'adidas',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Nike',
                'slug' => 'nike',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Kappa',
                'slug' => 'kappa',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Prada',
                'slug' => 'prada',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Brand',
                'slug' => 'brand',
                'status' => 'active',
                'created_at' => now(),
            ],
        ]);
    }
}
