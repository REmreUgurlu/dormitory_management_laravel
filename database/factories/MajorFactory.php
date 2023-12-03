<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Major>
 */
class MajorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $majors = [
            'Computer Science',
            'Electrical Engineering',
            'Mechanical Engineering',
            'Biology',
            'Chemistry',
            'Physics',
            // Add more majors as needed
        ];

        return [
            'name' => fake()->unique()->randomElement($majors)
        ];
    }
}