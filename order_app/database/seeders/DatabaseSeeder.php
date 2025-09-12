<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MainCategoriesSeeder::class,
            SubCategoriesSeeder::class,
            MenusSeeder::class,
            MenuOptionsSeeder::class,
            AllergensSeeder::class,
            MenuAllergensSeeder::class,
            OrderItemsSeeder::class,
        ]);
        
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
