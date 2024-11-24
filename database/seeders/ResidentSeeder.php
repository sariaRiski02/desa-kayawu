<?php

namespace Database\Seeders;

use App\Models\resident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        resident::factory()->count(50)->create();
    }
}
