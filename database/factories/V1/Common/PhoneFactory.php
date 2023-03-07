<?php

namespace Database\Factories\V1\Common;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'area_code'         => fake()->randomNumber(3, true),
            'telephone_prefix'  => fake()->randomNumber(3, true),
            'line_number'       => fake()->randomNumber(4, true),
        ];
    }
}
