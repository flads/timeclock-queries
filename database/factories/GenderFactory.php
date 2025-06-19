<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['M', 'F']);
        
        return [
            'id' => fake()->uuid(),
            'gender' => $gender,
            'description' => $gender === 'M' ? 'Male' : 'Female',
        ];
    }
    
}
