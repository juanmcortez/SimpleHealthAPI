<?php

namespace Database\Factories\V1\Common;

use Illuminate\Support\Str;
use App\Enums\PersonaGender;
use App\Models\V1\Common\Phone;
use App\Models\V1\Common\Social;
use App\Models\V1\Common\Address;
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
            'address_ID'        => Address::factory()->create()->getAttribute('id'),
            'phone_ID'          => Phone::factory()->create()->getAttribute('id'),
            'cellphone_ID'      => Phone::factory()->create()->getAttribute('id'),
            'social_ID'         => Social::factory()->create()->getAttribute('id'),
        ];
    }
}
