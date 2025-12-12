<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            'R&B',
            'Jazz',
            'Hip',
            'Pop',
            'Classic',
            'Blue',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(100)->create();
    }
}
