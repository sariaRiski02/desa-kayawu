<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\FamilySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\MemberFamilySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            PostSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'kayawuAdmin@kayawu.com',
            'password' => 'kayawu123'
        ]);
    }
}
