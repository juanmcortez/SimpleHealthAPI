<?php

namespace Database\Factories\V1\Common;

use App\Models\V1\Common\Phone;
use App\Models\V1\Common\Address;
use App\Models\V1\Common\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Address = $Phone = $Fax = $Persona = null;
        if (fake()->randomElement([true, false]) === true) {
            $Address    = Address::factory()->create()->getAttribute('id');
            $Phone      = Phone::factory()->create()->getAttribute('id');
            $Fax        = Phone::factory()->create()->getAttribute('id');
            $Persona    = Persona::factory()->create()->getAttribute('id');
        }

        return [
            'company_name'          => fake()->company(),
            'company_position'      => fake()->jobTitle(),
            'company_address_ID'    => $Address,
            'company_phone_ID'      => $Phone,
            'company_fax_ID'        => $Fax,
            'persona_ID'            => $Persona,
        ];
    }
}
