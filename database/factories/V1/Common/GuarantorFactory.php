<?php

namespace Database\Factories\V1\Common;

use App\Enums\RelationWPatient;
use App\Models\V1\Common\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Guarantor>
 */
class GuarantorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'persona_ID'            => Persona::factory()->create()->getAttribute('id'),
            'relation_with_patient' => fake()->randomElement(RelationWPatient::cases())->value,
        ];
    }
}
