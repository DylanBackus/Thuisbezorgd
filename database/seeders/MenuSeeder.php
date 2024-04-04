<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'name' => 'Hamburger',
                'photo' => 'hamburger.jpg',
                'description' => 'Delicious hamburger with lettuce, tomato, and cheese',
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pizza',
                'photo' => 'pizza.jpg',
                'description' => 'Tasty pizza with pepperoni, mushrooms, and bell peppers',
                'price' => 12.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Voeg hier meer menu-items toe indien gewenst
        ]);
    }
}
