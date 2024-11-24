<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lingkungan>
 */
class LingkunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
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


        return [
            'nama_lingkungan' => $this->faker->randomElement($lingkungans),
            'kepala_lingkungan' => fake()->name(),
        ];
    }
}
