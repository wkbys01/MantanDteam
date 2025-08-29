<?php

namespace Database\Seeders;

use App\Models\Main_categories;
use App\Models\Menus;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Main_categoriesSeeder::class,
            Sub_categoriesSeeder::class,
            MenusSeeder::class,
        ]);
        
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
