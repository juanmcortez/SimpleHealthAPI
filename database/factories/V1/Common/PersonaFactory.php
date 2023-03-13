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
        $gender = fake()->randomElement(PersonaGender::cases())->value;
        $Address = $Phone = $Cellphone = $Social = null;
        if (fake()->randomElement([true, false]) === true) {
            $Address    = Address::factory()->create()->getAttribute('id');
        }
        if (fake()->randomElement([true, false]) === true) {
            $Phone      = Phone::factory()->create()->getAttribute('id');
        }
        if (fake()->randomElement([true, false]) === true) {
            $Cellphone  = Phone::factory()->create()->getAttribute('id');
        }
        if (fake()->randomElement([true, false]) === true) {
            $Social     = Social::factory()->create()->getAttribute('id');
        }

        return [
            'first_name'        => fake()->firstName($gender),
            'middle_name'       => Str::upper(Str::substr(fake()->firstName($gender), 0, 1)),
            'last_name'         => fake()->lastName(),
            'date_of_birth'     => fake()->dateTimeBetween('-90 years', '-1 month')->format(config('app.format.date')),
            'gender'            => $gender,
            'address_ID'        => $Address,
            'phone_ID'          => $Phone,
            'cellphone_ID'      => $Cellphone,
            'social_ID'         => $Social,
        ];
    }
}
