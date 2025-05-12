<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'cpf' => fake()->unique()->cpf(false),
            'rg' => fake()->unique()->rg(false),
            'birthdate' => fake()->dateTimeBetween('-70 years', '-18 years'),
            'gender' => fake()->randomElement(['M', 'F']),
            'phone' => fake()->unique()->phoneNumberCleared(),
            'email' => fake()->unique()->email(),
            'branch_id' => Branch::factory()
        ];
    }
}
