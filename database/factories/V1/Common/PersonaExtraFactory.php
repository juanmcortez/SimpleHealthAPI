<?php

namespace Database\Factories\V1\Common;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\PersonaExtra>
 */
class PersonaExtraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_security_number'    => fake()->randomElement([null, fake()->randomNumber(6, true) . fake()->randomNumber(6, true)]),
            'external_ID'               => Str::upper(fake()->randomLetter() . fake()->randomLetter()) . fake()->randomNumber(6, true),
            'patient_level_accession'   => fake()->randomElement([null, fake()->randomNumber(8, true)]),
        ];
    }
}
