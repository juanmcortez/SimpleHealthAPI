<?php

namespace Database\Factories\V1\Common;

use Illuminate\Support\Str;
use App\Enums\PersonaGender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(PersonaGender::cases());
        return [
            'first_name'        => fake()->firstName($gender),
            'middle_name'       => Str::upper(Str::substr(fake()->firstName($gender), 0, 1)),
            'last_name'         => fake()->lastName(),
            'date_of_birth'     => fake()->dateTimeBetween('-90 years', '-1 month')->format(config('app.format.date')),
            'gender'            => $gender,
        ];
    }
}
