<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => \App\Models\Employer::factory(),
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->randomFloat(2, 1000, 9000),
            'location' => $this->faker->city,
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship']),
            'url' => $this->faker->url,
            'featured' => $this->faker->boolean(false),
        ];
    }
}