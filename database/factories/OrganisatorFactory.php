<?php

namespace Database\Factories;

use App\Models\Organisator;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisator>
 */
class OrganisatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'org_id'=>fake()->unique()->randomNumber(),
            'name' => fake()->name(),
            'description' => fake()->text(),
        ];
    }
}
