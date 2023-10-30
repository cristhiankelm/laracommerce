<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,

            // Products
            BrandsTableSeeder::class,
            BannersTableSeeder::class,
            CategoriesTableSeeder::class,

            ProductsTableSeeder::class,
            ShippingsTableSeeder::class,
            OrdersTableSeeder::class,
            CartsTableSeeder::class,

            // Blog
            PostCategoriesTableSeeder::class,
            PostTagsTableSeeder::class,
            PostsTableSeeder::class,
//            PostCommentsTableSeeder::class,

            SettingsTableSeeder::class,
            NotificationsTableSeeder::class,
        ]);

    }
}
