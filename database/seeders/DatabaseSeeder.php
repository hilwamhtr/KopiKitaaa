<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Migration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'name' => 'Kopi Arabica',
            'description' => 'Kopi dengan rasa kuat dan aroma khas.',
            'price' => 75000.00,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Kopi Robusta',
            'description' => 'Kopi dengan rasa lebih pahit dan kandungan kafein tinggi.',
            'price' => 60000.00,
            'stock' => 30,
        ]);
    }
}
