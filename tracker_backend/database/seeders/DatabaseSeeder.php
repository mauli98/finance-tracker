<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Create an Admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => User::ADMIN,
        ]);

        // Create a Family Member user
        User::create([
            'name' => 'Family Member User',
            'email' => 'member@example.com',
            'password' => bcrypt('password'),
            'role' => User::FAMILY_MEMBER,
        ]);
    }
}
