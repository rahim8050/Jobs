<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['new', 'in_progress', 'completed']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'type' => $this->faker->randomElement(['task', 'bug', 'feature']),
            'category' => $this->faker->randomElement(['backend', 'frontend', 'fullstack']),
            'tags' => $this->faker->words(3, true),
        ];
    }
}
