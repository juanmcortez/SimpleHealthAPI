<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\V1\Users\User;
use Illuminate\Database\Seeder;
use Database\Seeders\V1\Patients\PatientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user
        User::factory()->create();

        // Create some patients
        $this->callOnce(PatientSeeder::class);
    }
}
