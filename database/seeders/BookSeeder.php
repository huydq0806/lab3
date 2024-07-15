<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(25),
                'thumbnail' => fake()->imageUrl(50),
                'author' => fake()->text(25),
                'publisher' => fake()->text(20),
                'publication' => fake()->dateTime(),
                'price' => fake()->randomFloat(2, 1, 100),
                'quantity' => rand(1,300),
                'category_id' => rand(1,5)
            ]);
        }
    }
}
