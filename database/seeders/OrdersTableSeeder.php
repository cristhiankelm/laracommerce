<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'id' => 1,
                'order_number' => 'ORD-PMIQF5MYPK',
                'user_id' => 3,
                'sub_total' => 14399.00,
                'shipping_id' => 1,
                'coupon' => 573.90,
                'total_amount' => 13925.10,
                'quantity' => 6,
                'payment_method' => 'cod',
                'payment_status' => 'unpaid',
                'status' => 'delivered',
                'first_name' => 'Prajwal',
                'last_name' => 'Rai',
                'email' => 'prajwal.iar@gmail.com',
                'phone' => '9800887778',
                'country' => 'NP',
                'post_code' => '44600',
                'address1' => 'Koteshwor',
                'address2' => 'Kathmandu',
                'created_at' => '2020-08-14 07:20:44',
                'updated_at' => '2020-08-14 09:37:37',
            ],
            [
                'id' => 2,
                'order_number' => 'ORD-YFF8BF0YBK',
                'user_id' => 2,
                'sub_total' => 1939.03,
                'shipping_id' => 1,
                'coupon' => null,
                'total_amount' => 2039.03,
                'quantity' => 1,
                'payment_method' => 'cod',
                'payment_status' => 'unpaid',
                'status' => 'delivered',
                'first_name' => 'Sandhya',
                'last_name' => 'Rai',
                'email' => 'user@gmail.com',
                'phone' => '90000000990',
                'country' => 'NP',
                'post_code' => null,
                'address1' => 'Lalitpur',
                'address2' => null,
                'created_at' => '2020-08-14 22:14:49',
                'updated_at' => '2020-08-14 22:15:19',
            ],
            [
                'id' => 3,
                'order_number' => 'ORD-1CKWRWTTIK',
                'user_id' => 3,
                'sub_total' => 200.00,
                'shipping_id' => 1,
                'coupon' => null,
                'total_amount' => 300.00,
                'quantity' => 1,
                'payment_method' => 'paypal',
                'payment_status' => 'paid',
                'status' => 'process',
                'first_name' => 'Prajwal',
                'last_name' => 'Rai',
                'email' => 'prajwal.iar@gmail.com',
                'phone' => '9807009999',
                'country' => 'NP',
                'post_code' => '44600',
                'address1' => 'Kathmandu',
                'address2' => 'Kadaghari',
                'created_at' => '2020-08-15 06:40:49',
                'updated_at' => '2020-08-17 20:52:40',
            ],
            [
                'id' => 4,
                'order_number' => 'ORD-HVO0KX0YHW',
                'user_id' => 3,
                'sub_total' => 23660.00,
                'shipping_id' => 3,
                'coupon' => 150.00,
                'total_amount' => 23910.00,
                'quantity' => 6,
                'payment_method' => 'paypal',
                'payment_status' => 'paid',
                'status' => 'new',
                'first_name' => 'Prajwal',
                'last_name' => 'Rai',
                'email' => 'prajwal.iar@gmail.com',
                'phone' => '9800098878',
                'country' => 'NP',
                'post_code' => '44600',
                'address1' => 'Pokhara',
                'address2' => null,
                'created_at' => '2020-08-15 07:54:52',
                'updated_at' => '2020-08-15 07:54:52',
            ],
        ]);
    }
}
