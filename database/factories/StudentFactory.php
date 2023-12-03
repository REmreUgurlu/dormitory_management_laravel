<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ['Male', 'Female', 'Non-binary'] ;

        return [
            'name' => fake()->name(),
            'national_id' => fake()->unique()->numerify('###########'),
            'email' => fake()->unique()->safeEmail(),
            'date_of_birth' => fake()->dateTimeBetween('-28 years', '-18 years')->format('Y-m-d'),
            'gender' => fake()->randomElement($genders),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'room_number' => fake()->numberBetween(1,10),
            'major_id' => fake()->numberBetween(1,6)
            
        ];
    }
}