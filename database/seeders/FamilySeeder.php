<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Family::factory()->count(20)->create();
    }
}
