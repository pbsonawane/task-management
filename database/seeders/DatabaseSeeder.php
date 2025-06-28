<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'User One',
            'email' => 'user1@tasks.com',
            'password' => bcrypt('test@user1'), // use plain "password" for testing
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User Two',
            'email' => 'user2@tasks.com',
            'password' => bcrypt('test@user2'), // use plain "password" for testing
        ]);

        \App\Models\User::factory(3)->create(); // optional: 3 random users
    }
}
