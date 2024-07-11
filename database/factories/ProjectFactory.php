<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => fake()->city(),
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'image' => fake()->imageUrl(),
            'service_id' => fake()->randomElement(['1', '2', '3'])
        ];
    }
}