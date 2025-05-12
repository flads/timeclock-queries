<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AddressFactory extends Factory
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
            'street' => fake()->streetName(),
            'number' => fake()->buildingNumber(),
            'neighborhood' => fake()->randomElement([
                'Santa ' . fake()->firstName('female'),
                'São ' . fake()->firstName('male'),
            ]),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'zipcode' => fake()->postcode(),
        ];
    }
}
