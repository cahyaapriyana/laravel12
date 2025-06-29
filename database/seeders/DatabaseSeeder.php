<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed kategori contoh
        if (Category::count() === 0) {
            Category::insert([
                ['name' => 'Elektronik'],
                ['name' => 'Fashion'],
                ['name' => 'Makanan'],
                ['name' => 'Buku'],
            ]);
        }
    }
}
