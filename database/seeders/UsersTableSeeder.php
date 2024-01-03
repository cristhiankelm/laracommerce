<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'cris@admin.com',
            'password' => Hash::make('cris'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'cris@user.com',
            'password' => Hash::make('cris'),
            'role' => 'user',
            'status' => 'active',
        ]);

        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'cris@test.com',
            'password' => Hash::make('cris'),
            'role' => 'user',
            'status' => 'active',
        ]);
    }
}
