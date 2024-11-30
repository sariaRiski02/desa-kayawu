<?php

namespace Database\Seeders;

use App\Models\MemberFamily;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MemberFamily::factory()->count(200)->create();
    }
}
