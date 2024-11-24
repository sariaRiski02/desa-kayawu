<?php

namespace Database\Factories;

use App\Models\Lingkungan;
use App\Models\resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $pekerjaan = [
            'Petani',
            'Guru',
            'Tukang Kayu',
            'Pemilik Toko',
            'Penjahit',
            'Sopir',
            'Mekanik',
            'Perawat',
            'Bidan'
        ];

        return [
            "name" => fake()->name(),
            "job" => $this->faker->randomElement($pekerjaan),
            "date" => fake()->date(),
            "lingkungan_id" => Lingkungan::inRandomOrder()->first()->id

        ];
    }
}
