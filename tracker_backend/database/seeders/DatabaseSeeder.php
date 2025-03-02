<?php

namespace Database\Seeders;

use App\Models\User; // Added for seeding family accounts
use App\Models\FamilyAccount; // Added for seeding family accounts

// use App\Models\User;
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
        // Create a family account
        $familyAccount = FamilyAccount::create([
            'name' => 'Smith Family', // Example family account name
        ]);

        // Create users and associate them with the family account
        User::create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'role' => User::FAMILY_MEMBER,
            'family_account_id' => $familyAccount->id,
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
            'role' => User::FAMILY_MEMBER,
            'family_account_id' => $familyAccount->id,
        ]);
    }
        /**
     * Seed the application's database.
     *
     * @return void
     */
    // public function run(): void
    // {
    //     // Create an Admin user
    //     User::create([
    //         'name' => 'Admin User',
    //         'email' => 'admin@example.com',
    //         'password' => bcrypt('password'),
    //         'role' => User::ADMIN,
    //     ]);

    //     // Create a Family Member user
    //     User::create([
    //         'name' => 'Family Member User',
    //         'email' => 'member@example.com',
    //         'password' => bcrypt('password'),
    //         'role' => User::FAMILY_MEMBER,
    //     ]);
    // }
}
