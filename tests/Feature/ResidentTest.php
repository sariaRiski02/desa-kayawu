<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResidentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testResident()
    {
        $response = $this->post('/dashboard/add/penduduk', [
            'name' => 'test',
            'gender' => 'L',
            'address' => 'lingkungan 8',
            'marital_status' => 'CH',
            'birth_place' => 'kayawu',
            'birth_date' => '12/09/2002',
            'religion' => 'islam',
            'educational_level' => 'sma',
            'occupation' => 'petani',
            'family_position' => 'anak',
            'nik' => '23242324232323'

        ]);
    }
}
