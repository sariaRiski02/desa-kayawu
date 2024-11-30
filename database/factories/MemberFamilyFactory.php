<?php

namespace Database\Factories;

use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberFamily>
 */
class MemberFamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $environments = ['Lingkungan 1', 'Lingkungan 2', 'Lingkungan 3', 'Lingkungan 4', 'Lingkungan 5', 'Lingkungan 6', 'Lingkungan 7', 'Lingkungan 8'];

        $occupation = [
            "PETANI/PEKEBUN",
            "MENGURUS RUMAH TANGGA",
            "PELAJAR/MAHASISWA",
            "KARYAWAN SWASTA",
            "BELUM/TIDAK BEKERJA",
            "WIRASWASTA",
            "PEGAWAI NEGERI SIPIL",
            "GURU",
            "WARTAWAN",
            "SOPIR",
            "KARYAWAN HONORER",
            "TUKANG KAYU",
            "BURUH HARIAN LEPAS",
            "PENSIUNAN",
            "DOKTER",
            "PERAWAT",
            "TNI",
            "IRT",
            "PENDETA",
            "KARYAWAN BUMN",
            "BURUH TANI/PERKEBUNAN",
            "PETALAUT",
            "TUKANG BATU",
            "TUKANG CUKUR",
            "TUKANG LAS/PANDAI BESI",
            "PUBLIC WORK"
        ];

        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement([
                'L',
                'P'
            ]),
            'marital_status' => $this->faker->randomElement([
                'BK',
                'K',
                'CH',
                'CM'
            ]),
            'address' => $this->faker->randomElement($environments),
            'birth_place' => $this->faker->city,
            'birth_date' => $this->faker->date,
            'religion' => $this->faker->randomElement([
                'islam',
                'kristen',
                'katolik',
                'budha',
                'hindu',
                'konghuchu'
            ]),
            'education_level' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'sarjana']),
            'occupation' => $this->faker->randomElement($occupation),
            'family_position' => $this->faker->randomElement([
                'ibu rumah tangga',
                'kepala keluarga',
                'anak'
            ]),
            'nik' => $this->faker->numberBetween(1),
            'id_family' => Family::inRandomOrder()->first()->id,

        ];
    }
}
