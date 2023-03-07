<?php

namespace Database\Factories\V1\Common;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street_name'           => fake()->streetName(),
            'street_name_extended'  => fake()->streetSuffix(),
            'city'                  => fake()->city(),
            'district'              => null,
            'state'                 => fake()->city(),
            'postal_code'           => fake()->postcode(),
            'country_code'          => fake()->countryCode(),
        ];
    }
}
