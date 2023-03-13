<?php

namespace Database\Factories\V1\Patients;

use App\Models\V1\Common\Persona;
use App\Models\V1\Common\Employer;
use App\Models\V1\Common\Guarantor;
use App\Models\V1\Common\PersonaExtra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Patients\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Guarantor = $Employer = null;
        if (fake()->randomElement([true, false]) === true) {
            $Guarantor  = Guarantor::factory()->create()->getAttribute('id');
        }
        if (fake()->randomElement([true, false]) === true) {
            $Employer   = Employer::factory()->create()->getAttribute('id');
        }

        return [
            'persona_ID'        => Persona::factory()->create()->getAttribute('id'),
            'persona_extra_ID'  => PersonaExtra::factory()->create()->getAttribute('id'),
            'guarantor_ID'      => $Guarantor,
            'employer_ID'       => $Employer,
            'created_at'        => fake()->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
