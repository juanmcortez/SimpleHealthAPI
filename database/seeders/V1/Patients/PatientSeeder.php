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
            ->create()
            ->each(function ($patient) {
                // Create the relationship
                $persona        = $patient->persona->factory()->create();
                $address        = $persona->address->factory()->create();
                $phone          = $persona->phone->factory()->create();
                $cellphone      = $persona->phone->factory()->create();

                // Update the parent model
                $patient->update([
                    'persona_ID'    => $persona->id,
                ]);
                $persona->update([
                    'address_ID'    => $address->id,
                    'phone_ID'      => $phone->id,
                    'cellphone_ID'  => $cellphone->id,
                ]);
            });
    }
}
