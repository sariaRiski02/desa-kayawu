<?php

namespace Database\Seeders;

use App\Models\Lingkungan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $lingkungans = [
            'Lingkungan 1',
            'Lingkungan 2',
            'Lingkungan 3',
            'Lingkungan 4',
            'Lingkungan 5',
            'Lingkungan 6',
            'Lingkungan 7',
            'Lingkungan 8'
        ];

        foreach ($lingkungans as $lingkungan) {
            Lingkungan::create([
                'nama_lingkungan' => $lingkungan,
                'kepala_lingkungan' => fake()->name(),
            ]);
        }
    }
}
