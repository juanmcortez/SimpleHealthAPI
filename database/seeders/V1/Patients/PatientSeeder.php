<?php

namespace Database\Seeders\V1\Patients;

use Illuminate\Database\Seeder;
use App\Models\V1\Patients\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 100 patients with it's own demographics information.
        Patient::factory()
            ->count(100)
            ->create();
    }
}
