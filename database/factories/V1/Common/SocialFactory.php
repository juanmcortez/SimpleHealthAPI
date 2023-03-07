<?php

namespace Database\Factories\V1\Common;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Common\Social>
 */
class SocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $email = explode('@', fake()->freeEmail());
        return [
            'email_username'    => $email[0],
            'email_domain'      => $email[1],
            'website'           => 'www.' . fake()->domainName(),
        ];
    }
}
