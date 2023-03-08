<?php

namespace Database\Factories\V1\Patients;

use App\Models\V1\Common\Persona;
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
        return [
            'persona_ID'        => Persona::factory()->create()->getAttribute('id'),
            'persona_extra_ID'  => PersonaExtra::factory()->create()->getAttribute('id'),
        ];
    }
}
