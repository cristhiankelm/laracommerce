<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'id' => 1,
                'product_id' => 8,
                'order_id' => 1,
                'user_id' => 3,
                'price' => 200.00,
                'status' => 'new',
                'quantity' => 2,
                'amount' => 400.00,
                'created_at' => '2020-08-14 07:15:45',
                'updated_at' => '2020-08-14 07:20:45',
            ],
            [
                'id' => 2,
                'product_id' => 7,
                'order_id' => 1,
                'user_id' => 3,
                'price' => 1939.03,
                'status' => 'new',
                'quantity' => 1,
                'amount' => 1999.00,
                'created_at' => '2020-08-14 07:15:59',
                'updated_at' => '2020-08-14 07:20:45',
            ],
            [
                'id' => 3,
                'product_id' => 5,
                'order_id' => 1,
                'user_id' => 3,
                'price' => 3600.00,
                'status' => 'new',
                'quantity' => 3,
                'amount' => 12000.00,
                'created_at' => '2020-08-14 07:16:12',
                'updated_at' => '2020-08-14 07:20:45',
            ],
            [
                'id' => 4,
                'product_id' => 7,
                'order_id' => 2,
                'user_id' => 2,
                'price' => 1939.03,
                'status' => 'new',
                'quantity' => 1,
                'amount' => 1939.03,
                'created_at' => '2020-08-14 22:13:51',
                'updated_at' => '2020-08-14 22:14:59',
            ],
            [
                'id' => 5,
                'product_id' => 8,
                'order_id' => 3,
                'user_id' => 3,
                'price' => 200.00,
                'status' => 'new',
                'quantity' => 1,
                'amount' => 200.00,
                'created_at' => '2020-08-15 06:39:59',
                'updated_at' => '2020-08-15 06:41:00',
            ],
            [
                'id' => 8,
                'product_id' => 9,
                'order_id' => 4,
                'user_id' => 3,
                'price' => 190.00,
                'status' => 'new',
                'quantity' => 2,
                'amount' => 380.00,
                'created_at' => '2020-08-15 07:44:53',
                'updated_at' => '2020-08-15 07:54:53',
            ],
            [
                'id' => 9,
                'product_id' => 6,
                'order_id' => 4,
                'user_id' => 3,
                'price' => 5820.00,
                'status' => 'new',
                'quantity' => 4,
                'amount' => 23280.00,
                'created_at' => '2020-08-15 07:45:29',
                'updated_at' => '2020-08-15 07:54:53',
            ],
            [
                'id' => 10,
                'product_id' => 10,
                'order_id' => null,
                'user_id' => 2,
                'price' => 270.00,
                'status' => 'new',
                'quantity' => 1,
                'amount' => 270.00,
                'created_at' => '2020-08-17 21:07:33',
                'updated_at' => '2020-08-17 21:17:03',
            ],
            [
                'id' => 11,
                'product_id' => 9,
                'order_id' => null,
                'user_id' => 2,
                'price' => 190.00,
                'status' => 'new',
                'quantity' => 2,
                'amount' => 380.00,
                'created_at' => '2020-08-17 21:08:35',
                'updated_at' => '2020-08-17 21:17:03',
            ],
        ]);
    }
}
