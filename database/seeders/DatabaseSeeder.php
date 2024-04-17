<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note; // Don't forget to import the Note model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a single test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass123.')
        ]);

        // Create 100 notes associated with random users
        Note::factory(100)->create();
    }
}
