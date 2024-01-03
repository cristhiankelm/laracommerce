<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'id' => 1,
            'description' => '¡Bienvenido a cris-SHOP! Somos apasionados por la moda y estamos aquí para ofrecerte una experiencia de compra excepcional en el mundo de la ropa. Nuestra tienda es tu destino definitivo para encontrar las últimas tendencias y los estilos más deslumbrantes en moda. Con una amplia selección de ropa para todas las ocasiones, nuestra misión es hacer que destaques, sin importar cuál sea tu preferencia de moda.',
            'short_des' => 'Explora nuestra tienda hoy mismo y descubre por qué cris-SHOP es la elección preferida de los amantes de la moda! Estamos ansiosos por atenderte y ayudarte a encontrar tu estilo único.',
            'logo' => '/storage/photos/1/logo.png',
            'photo' => '/storage/photos/1/blog3.jpg',
            'address' => 'KM7 - Ciudad del Este -> PY',
            'phone' => '+595 (986) 496-865',
            'email' => 'cris@gmail.com',
        ]);
    }
}
