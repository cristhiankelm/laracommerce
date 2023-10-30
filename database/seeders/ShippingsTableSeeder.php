<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippings')->insert([
            [
                'id' => 1,
                'type' => 'Kahtmandu',
                'price' => 100.00,
                'status' => 'active',
                'created_at' => Carbon::parse('2020-08-14 04:22:17'),
                'updated_at' => Carbon::parse('2020-08-14 04:22:17'),
            ],
            [
                'id' => 2,
                'type' => 'Out of valley',
                'price' => 300.00,
                'status' => 'active',
                'created_at' => Carbon::parse('2020-08-14 04:22:41'),
                'updated_at' => Carbon::parse('2020-08-14 04:22:41'),
            ],
            [
                'id' => 3,
                'type' => 'Pokhara',
                'price' => 400.00,
                'status' => 'active',
                'created_at' => Carbon::parse('2020-08-15 06:54:04'),
                'updated_at' => Carbon::parse('2020-08-15 06:54:04'),
            ],
            [
                'id' => 4,
                'type' => 'Dharan',
                'price' => 400.00,
                'status' => 'active',
                'created_at' => Carbon::parse('2020-08-17 20:50:48'),
                'updated_at' => Carbon::parse('2020-08-17 20:50:48'),
            ],
        ]);
    }
}
