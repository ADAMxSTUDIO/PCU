<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'IDCS' => fake()->randomNumber($nbDigits = 2, $strict = true),
            'IDREG' => fake()->randomNumber($nbDigits = 2, $strict = true),
            'email' => fake()->unique()->safeEmail(),
            'password' => 'h36h73hf486$#', 
            'firstname' => fake()->firstName(),    
            'lastname' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'hasRole' => fake()->numberBetween($min = 1, $max = 3),
            'hasAdmin' => 0,
            'remember_token' => Str::random(10),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'username_verified_at' => null,
        ]);
    }
}